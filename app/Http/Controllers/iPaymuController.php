<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Kategori;
use App\Models\Pembelian;
use App\Models\Layanan;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\digiFlazzController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SmileOneController;

class iPaymuController extends Controller
{
    protected $url = 'https://my.ipaymu.com';
    
    public function __construct()
    {
        $this->virtual_account = ENV("IPAYMU_VA");
        $this->api_key = ENV("IPAYMU_KEY");
    }

    public function requestPayment($harga, $order_id, $nomor, $method, $email,$paymentChannel)
    {
        $body['amount']      = round($harga);
        $body['notifyUrl'] = ENV("APP_URL").'/callback';
        $body['referenceId'] = $order_id;
        $body['name'] = ENV("APP_NAME");
        $body['phone'] = $nomor;
        $body['email'] = $email;
        $body['paymentMethod'] = $method;
        $body['paymentChannel'] = $paymentChannel;
        $body['expired'] = 24;
        $body['expired_type'] = "hours";

        $jsonBody     = json_encode($body, JSON_UNESCAPED_SLASHES);
        $requestBody  = strtolower(hash('sha256', $jsonBody));
        $stringToSign = strtoupper("post") . ':' . $this->virtual_account . ':' . $requestBody . ':' . $this->api_key;
        $signature    = hash_hmac('sha256', $stringToSign, $this->api_key);
        $timestamp    = Date('YmdHis');

        return $this->connect('/api/v2/payment/direct', $jsonBody, $signature, $timestamp);
    }

    public function checkTransaction($transactionId)
    {
        $body['transactionId'] = $transactionId;

        $jsonBody     = json_encode($body, JSON_UNESCAPED_SLASHES);
        $requestBody  = strtolower(hash('sha256', $jsonBody));
        $stringToSign = strtoupper("post") . ':' . $this->virtual_account . ':' . $requestBody . ':' . $this->api_key;
        $signature    = hash_hmac('sha256', $stringToSign, $this->api_key);
        $timestamp    = Date('YmdHis');

        return $this->connect('/api/v2/transaction', $jsonBody, $signature, $timestamp);
    }

    public function connect($endPoint, $body, $signature, $timestamp)
    {
        $ch = curl_init($this->url . $endPoint);

        $headers = array(
            'Content-Type: application/json',
            'va: ' . $this->virtual_account,
            'signature: ' . $signature,
            'timestamp: ' . $timestamp
        );

        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $err = curl_error($ch);
        $ret = curl_exec($ch);
        curl_close($ch);
        if ($err) {
            return $err;
        } else {
            return json_decode($ret, true);
        }
    }

    public function handle(Request $request)
    {
        //Make sure the sender is from iPay
        // Log::info($request->server());
        // if ($request->server('REMOTE_ADDR') != '120.89.93.249') return "Invalid IP Address";

        $trx = $request->trx_id;
        $pembayaran = Pembayaran::where('reference', $trx)->first();
        
        if ($request->status == "berhasil" || $request->status == "pending") {
            $order_id = $pembayaran->order_id;
            $dataPembeli = Pembelian::where('order_id', $order_id)->first();
            
            $dataLayanan = Layanan::where('layanan', $dataPembeli->layanan)->first();
            
            if(!$dataLayanan) return "Sukses";
            
            $pembayaran = Pembayaran::where('order_id', $order_id)->first();
            $dataKategori = Kategori::where('id', $dataLayanan->kategori_id)->first();
            
            $pesan = "Pembayaran Rp ".number_format($dataPembeli->harga, 0, '.',',')." Berhasil\n\n".
                     "*Estimasi Proses Pengisian*\n".
                     "- 1-15 Menit Max 24 Jam Untuk Top Up All Game\n".
                     "- 3-7 Jam Max 24 Jam Untuk Aplikasi Premium\n".
                     "- Diamond Slow : *15-360 Menit Jika Event/Ramai Maksimal 24 Jam*\n\n".
                     "INI ADALAH PESAN OTOMATIS";
    
            $zoneSend = $dataPembeli->zone == null ? "" : "($dataPembeli->zone)";
            $nickname = $dataPembeli->nickname == null ? '' : "Nickname : $dataPembeli->nickname\n";
    
            $pesanAdmin = "*PEMBAYARAN-$order_id* TELAH LUNAS\n\n".
                          "LAYANAN : $dataPembeli->layanan\n".
                          "USER ID : $dataPembeli->user_id $zoneSend\n".
                          $nickname.
                          "PEMBAYARAN : $pembayaran->metode\n".
                          "JUMLAH : Rp. ".number_format($pembayaran->harga,0,'.',',')."\n\n".
                          "*Kontak Pembeli*\n".
                          "No HP : $pembayaran->no_pembeli\n".
                          "Invoice : ".env("APP_URL")."/pembelian/invoice/$order_id";
            
            $updatePembayaran = $pembayaran->update(['status' => 'Lunas']);
            
            try{
		        $requestPesan = $this->msg(ENV("NOMOR_ADMIN"), $pesanAdmin);
		        $pesanMember = $this->msg($dataPembeli->no_pembeli, $pesan);
            }catch (\Exception $e){
		
	        }
                
            
                if($dataLayanan->provider == "digiflazz"){
                    $digiFlazz = new digiFlazzController;
                    $provider_order_id = rand(1, 10000);
                    $order = $digiFlazz->order($dataPembeli->user_id, $dataPembeli->zone, $dataLayanan->provider_id, $provider_order_id);
    
                    if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                        $order['status'] = true;
                    } else {
                        $order['status'] = false;
                    }
                }else if($dataLayanan->provider == "vip"){
                    $vip = new VipResellerController;
                    $order = $vip->order($dataPembeli->user_id, $dataPembeli->zone, $dataLayanan->provider_id);
                    
                    if($order['result']){
                        $order['data']['status'] = $order['result'];
                        $order['transactionId'] = $order['data']['trxid'];
                    }else{
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "apigames"){
                    $provider_order_id = rand(1, 10000);
                    $apigames = new ApiGamesController;
                    $order = $apigames->order($dataPembeli->user_id, $dataPembeli->zone, $dataLayanan->provider_id, $provider_order_id);
    
                    if($order['data']['status'] == "Sukses"){
                        $order['transactionId'] = $provider_order_id;
                        $order['data']['status'] = true;
                    }else{
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "smileone"){
                    $july = new JulyhyusController;
                    $order = $july->order($dataPembeli->user_id, $dataPembeli->zone, $dataLayanan->provider_id);
                    if($order['result']){
                        $order['data']['status'] = $order['result'];
                        $order['transactionId'] = $order['data']['trxid'];
                    }else{
                        $order['data']['status'] = false;
                    }
                }
            
            if ($order['data']['status']) { // Jika pembelian sukses

                $dataPembeli->update([
                    'provider_order_id' => isset($order['transactionId']) ? $order['transactionId'] : 0,
                    'status' => 'Success',
                    'log' => json_encode($order)
                ]);

            } else { //jika pembelian gagal

                $dataPembeli->update([
                    'status' => 'Batal',
                    'log' => json_encode($order)
                ]);

            }
            
            return "Sukses";
        } else if ($request->status == "gagal") {
            $pembayaran->update([
                'status' => 'Batal'
            ]);

            $dataPembeli->update([
                'status' => 'Batal'
            ]);

            return "Sukses";
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
          CURLOPT_URL => "https://wa.miliyan.id/send-message",
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
