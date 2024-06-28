<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Console\Commands\GojekPay;
use App\Console\Commands\Ovo;
use App\Models\Pembayaran;
use App\Models\Pembelian;
use App\Models\Layanan;
use App\Models\LayananPpob;
use App\Models\Kategori;
use App\Models\Gojek;
use App\Models\Ovo as OvoModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\iPaymuController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\JulyhyusController;
use Illuminate\Support\Facades\Http;

class updatePembelian extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatePembelian';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = now();
        $parsingDate = Carbon::parse($date);
        $datas = Pembayaran::where('status', 'Belum Lunas')
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->get();
        if ($datas != null) {

            foreach ($datas as $data) {
                $pesan = "Pembayaran Rp " . number_format($data->harga, 0, '.', ',') . " Berhasil\n\n" .
                    "*Estimasi Proses Pengisian*\n" .
                    "- 1-15 Menit Max 24 Jam Untuk Top Up All Game\n" .
                    "- 3-7 Jam Max 24 Jam Untuk Aplikasi Premium\n\n" .
                    "INI ADALAH PESAN OTOMATIS";
    
                $tomorrow = Carbon::create($data->created_at)->addDay();
                $pembelian = Pembelian::where('order_id', $data->order_id)->select('user_id', 'zone', 'layanan', 'tipe_transaksi', 'nickname')->first();
                $pembayaran = Pembayaran::where('order_id', $data->order_id)->select('harga','order_id','no_pembeli', 'metode')->first();
                
                try{
                    
                    if($pembelian->tipe_transaksi == "game"){
                        $layanan = Layanan::where('layanan', $pembelian->layanan)->select('provider_id', 'kategori_id', 'provider')->first();
                    }else if($pembelian->tipe_transaksi == "pulsa"){
                        $layanan = Layanan::where('layanan', $pembelian->layanan)->select('provider_id', 'tipe', 'kode')->first();              
                    }
                    
                    $kategori = Kategori::where('id', $layanan->kategori_id)->first();

                }catch(\Exception $e){
                    continue;
                }
                $nickname = $pembelian->nickname == null ? '' : "Nickname : $pembelian->nickname";
                $zone = $data->zone == null ? "" : "($data->zone)\n";
                $pesanAdmin = "*PEMBAYARAN $data->order_id* TELAH LUNAS\n\n" .
                "LAYANAN : $pembelian->layanan\n" .
                "USER ID : $pembelian->user_id $zone\n" .
                $nickname .
                "PEMBAYARAN : $pembayaran->metode\n" .
                "JUMLAH : $pembayaran->harga\n\n" .
                "Kontak Pembeli\n" .
                "No HP : $data->no_pembeli" .
                "Invoice : " . env("APP_URL") . "/pembelian/invoice/$data->order_id";

                $digiFlazz = new digiFlazzController;
                $smile = new SmileOneController;
                $vip = new VipResellerController;
                $apigames = new ApiGamesController;
                $july = new JulyhyusController;
                if ($date > $tomorrow && $date > $data->created_at) {

                    Pembayaran::where('order_id', $data->order_id)->update(['status' => 'Batal']);
                    Pembelian::where('order_id', $data->order_id)->update(['status' => 'Batal']);

                }else if($data->metode == "GOPAY"){

                    $authToken = Gojek::select('auth_token')->latest()->first();
                    
                    if(!$authToken) continue;
                    
                    $app = new GojekPay($authToken->auth_token);
                    $getData = json_decode($app->getTransactionHistory(), true);
                    $list_transaksi = $getData['data']['success'];
                    
                    foreach ($list_transaksi as $transfer) {
                        if ($transfer['type'] == "credit" && $transfer['amount']['value'] == $pembayaran->harga) {
                            
                            try {
                                $requestPesan = $this->msg(ENV("NOMOR_ADMIN"),$pesanAdmin);
                                $pesanMember = $this->msg($data->no_pembeli, $pesan);
                                
                                Pembayaran::where('order_id', $data->order_id)->update(['status' => 'Lunas']);

                              
                                    if($layanan->provider == "digiflazz"){
                                        $provider_order_id = rand(1, 10000);
                                        $order = $digiFlazz->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
                                        
                                        if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                                            $order['status'] = true;
                                        } else {
                                            $order['status'] = false;
                                        }   
                                    }else if($layanan->provider == "vip"){
                                        $order = $vip->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id);
                                        
                                        if($order['result']){
                                            $order['status'] = true;
                                            $provider_order_id = $order['data']['trxid'];
                                        }else{
                                            $order['status'] = false;
                                        }
                                    }else if($layanan->provider == "apigames"){
                                        $provider_order_id = rand(1, 10000);
                                        $apigames = new ApiGamesController;
                                        $order = $apigames->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
    
                                        if ($order['data']['status'] == "Sukses") {
                                            $order['transactionId'] = $provider_order_id;
                                            $order['status'] = true;
                                        } else {
                                            $order['status'] = false;
                                        }
                                    }
                                

                                if($order['status']){

                                    $updatePembelian = Pembelian::where('order_id', $data->order_id)->update([
                                                            'provider_order_id' => $provider_order_id ? $provider_order_id : "",
                                                            'status' => 'Sukses',
                                                            'log' => json_encode($order)
                                                        ]);
                                    Log::info('Order ID : ' . $data->order_id . ' Sukses');
                                }else{
                                    Pembelian::where('order_id', $data->order_id)->update([
                                        'log' => json_encode($order),
                                        'status' => 'Pending'
                                    ]);
                                }
                            } catch (\Exception $e) {
                                // throw $e;
                                continue;
                            }

                        }

                    }  
                                      
                }else if($data->metode == "OVO"){

                    $authToken = OvoModel::select('AuthToken')->latest()->first();
                    
                    if(!$authToken) continue;
                    
                    $init = new Ovo($authToken->AuthToken);
                    
                    foreach ($init->transactionHistory() as $data_trans) {
                        try {
                            foreach ($data_trans->orders[0]->complete as $transaction => $key) {
                                $dataArray = [];
                                $data_gojek = json_decode(json_encode($key), true);
                                $dataMasuk = $data_gojek['transaction_amount'];
                                $incomingTransfer = $data_gojek['transaction_type'];

                                if ($incomingTransfer == "INCOMING TRANSFER" && $dataMasuk == $pembayaran->harga) { //cek apakah ada status incoming transfer jika ada push ke array
                                    try {
                                        $requestPesan = $this->msg(ENV("NOMOR_ADMIN"),$pesanAdmin);
                                        $pesanMember = $this->msg($data->no_pembeli, $pesan);

                                            if($layanan->provider == "digiflazz"){
                                                $provider_order_id = rand(1, 10000);
                                                $order = $digiFlazz->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
                                                
                                                if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                                                    $order['status'] = true;
                                                } else {
                                                    $order['status'] = false;
                                                }   
                                            }else if($layanan->provider == "vip"){
                                                $order = $vip->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id);
                                                
                                                if($order['result']){
                                                    $order['status'] = true;
                                                    $provider_order_id = $order['data']['trxid'];
                                                }else{
                                                    $order['status'] = false;
                                                }
                                            }else if($layanan->provider == "apigames"){
                                                $provider_order_id = rand(1, 10000);
                                                $apigames = new ApiGamesController;
                                                $order = $apigames->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
            
                                                if ($order['data']['status'] == "Sukses") {
                                                    $order['transactionId'] = $provider_order_id;
                                                    $order['status'] = true;
                                                } else {
                                                    $order['status'] = false;
                                                }
                                            }   
                                            
                                        Pembayaran::where('order_id', $data->order_id)->update(['status' => 'Lunas']);

                                        if ($order['status']) {

                                            $updatePembelian = Pembelian::where('order_id', $data->order_id)->update([
                                                'provider_order_id' => $provider_order_id ? $provider_order_id : "",
                                                'status' => 'Sukses',
                                                'log' => json_encode($order)
                                            ]);
                                        } else {
                                            Pembelian::where('order_id', $data->order_id)->update([
                                                'log' => json_encode($order),
                                                'status' => 'Pending'
                                            ]);
                                        }
                                    } catch (\Exception $e) {
                                        // throw $e;
                                        continue;
                                    }                                    
                                }
                            }
                        } catch (\Exception $e) {
                            continue;
                        }
                    }                                        
   
                }else if($data->metode == "Saldo"){

                    $authToken = OvoModel::select('AuthToken')->latest()->first();
                    
                    if(!$authToken) continue;
                    
                    $init = new Ovo($authToken->AuthToken);
                    
                    foreach ($init->transactionHistory() as $data_trans) {
                        try {
                            foreach ($data_trans->orders[0]->complete as $transaction => $key) {
                                $dataArray = [];
                                $data_gojek = json_decode(json_encode($key), true);
                                $dataMasuk = $data_gojek['transaction_amount'];
                                $incomingTransfer = $data_gojek['transaction_type'];

                                if ($incomingTransfer == "INCOMING TRANSFER" && $dataMasuk == $pembayaran->harga) { //cek apakah ada status incoming transfer jika ada push ke array
                                    try {
                                        $requestPesan = $this->msg(ENV("NOMOR_ADMIN"),$pesanAdmin);
                                        $pesanMember = $this->msg($data->no_pembeli, $pesan);

                                            if($layanan->provider == "digiflazz"){
                                                $provider_order_id = rand(1, 10000);
                                                $order = $digiFlazz->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
                                                
                                                if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                                                    $order['status'] = true;
                                                } else {
                                                    $order['status'] = false;
                                                }   
                                            }else if($layanan->provider == "vip"){
                                                $order = $vip->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id);
                                                
                                                if($order['result']){
                                                    $order['status'] = true;
                                                    $provider_order_id = $order['data']['trxid'];
                                                }else{
                                                    $order['status'] = false;
                                                }
                                            }else if($layanan->provider == "apigames"){
                                                $provider_order_id = rand(1, 10000);
                                                $apigames = new ApiGamesController;
                                                $order = $apigames->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
            
                                                if ($order['data']['status'] == "Sukses") {
                                                    $order['transactionId'] = $provider_order_id;
                                                    $order['status'] = true;
                                                } else {
                                                    $order['status'] = false;
                                                }
                                            }   
                                            
                                        Pembayaran::where('order_id', $data->order_id)->update(['status' => 'Lunas']);

                                        if ($order['status']) {

                                            $updatePembelian = Pembelian::where('order_id', $data->order_id)->update([
                                                'provider_order_id' => $provider_order_id ? $provider_order_id : "",
                                                'status' => 'Sukses',
                                                'log' => json_encode($order)
                                            ]);
                                        } else {
                                            Pembelian::where('order_id', $data->order_id)->update([
                                                'log' => json_encode($order),
                                                'status' => 'Pending'
                                            ]);
                                        }
                                    } catch (\Exception $e) {
                                        // throw $e;
                                        continue;
                                    }                                    
                                }
                            }
                        } catch (\Exception $e) {
                            continue;
                        }
                    }                                        
                
                }else if($data->metode == "BCA"){
                    $cekmutasi = new CekMutasiController();
                    $mutasi = $cekmutasi->check($pembayaran->harga);
                    
                    if($mutasi['success']){
                        foreach($mutasi['response'] as $transaksi){
                            if($transaksi['type'] == "credit" && $transaksi['amount'] == $pembayaran->harga){
                                try {
                                    $requestPesan = $this->msg(ENV("NOMOR_ADMIN"),$pesanAdmin);
                                    $pesanMember = $this->msg($data->no_pembeli, $pesan);

                                            if($layanan->provider == "digiflazz"){
                                                $provider_order_id = rand(1, 10000);
                                                $order = $digiFlazz->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
                                                
                                                if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                                                    $order['status'] = true;
                                                } else {
                                                    $order['status'] = false;
                                                }   
                                            }else if($layanan->provider == "vip"){
                                                $order = $vip->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id);
                                                
                                                if($order['result']){
                                                    $order['status'] = true;
                                                    $provider_order_id = $order['data']['trxid'];
                                                }else{
                                                    $order['status'] = false;
                                                }
                                            }else if($layanan->provider == "apigames"){
                                                $provider_order_id = rand(1, 10000);
                                                $apigames = new ApiGamesController;
                                                $order = $apigames->order($pembelian->user_id, $pembelian->zone, $layanan->provider_id, $provider_order_id);
            
                                                if ($order['data']['status'] == "Sukses") {
                                                    $order['transactionId'] = $provider_order_id;
                                                    $order['status'] = true;
                                                } else {
                                                    $order['status'] = false;
                                                }
                                            }   
                                    Pembayaran::where('order_id', $data->order_id)->update(['status' => 'Lunas']);

                                    if ($order['status']) {

                                        $updatePembelian = Pembelian::where('order_id', $data->order_id)->update([
                                            'provider_order_id' => $provider_order_id ? $provider_order_id : "",
                                            'status' => 'Sukses',
                                            'log' => json_encode($order)
                                        ]);
                                    } else {
                                        Pembelian::where('order_id', $data->order_id)->update([
                                            'log' => json_encode($order),
                                            'status' => 'Pending'
                                        ]);
                                    }
                                } catch (\Exception $e) {
                                    // throw $e;
                                    continue;
                                }                                
                            }
                        }
                    }
                }
            }
        }            
    }
    
    public function msg($nomor, $msg)
    {
        $data = [
            'api_key' => ENV('WA_KEY'),
            'sender'  => ENV('WA_NUMBER'),
            'number'  => "$nomor",
            'message' => "$msg"
        ];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://wa.nightmarketid.my.id/send-message",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($data),
          CURLOPT_HTTPHEADER => array('Content-Type: application/json'))
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }    
}
