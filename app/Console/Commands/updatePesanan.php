<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pembelian;
use App\Models\Layanan;
Use App\Models\LayananPpob;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\JulyhyusController;
use App\Http\Controllers\iPaymuController;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class updatePesanan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatePesanan';

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
        $pesanan = Pembelian::Where('status', 'Menunggu')
                             ->orWhere('status', 'Sukses')
                             ->get();
        
        $digiFlazz = new digiFlazzController;
        $vip = new VipResellerController;
        $apigames = new ApiGamesController;
        $july = new JulyhyusController;
        
         foreach($pesanan as $data)
        {
            $pesan = "Pembelian *$data->layanan* Telah Berhasil Dikirim, Silahkan Cek Akun Anda, Terima kasih Sudah Order\n\n".
                     "Jika Pesanan Anda Belum Masuk Harap Hubungi Admin\n".
                     "Whatsapp : ".ENV("NOMOR_ADMIN");

            $pembayaran = Pembayaran::where('order_id', $data->order_id)->first();

            if ($data->tipe_transaksi == "game") {
                $layanan = Layanan::where('layanan', $data->layanan)->first();
            } else if ($data->tipe_transaksi == "pulsa") {
                $layanan = Layanan::where('layanan', $data->layanan)->first();
            }
            try{
                $providerId = $layanan->provider_id;
                $provider_order_id = $data->provider_order_id;
                $uid = $data->user_id;
                $zone = $data->zone;
            
                $provider_order_id = $data->provider_order_id;
                
                if($layanan->provider == "digiflazz"){
                    $checking = $digiFlazz->status($provider_id, $providerId, $uid, $zone);
                }else if($layanan->provider == "apigames"){
                    $checking = json_decode($apigames->status($provider_id),true);
                }else if($layanan->provider == "vip"){
                    $checking = $vip->status($provider_id);
                    $checking['data']['status'] = $checking['data'][0]['status'];
                }
                // dd($checking['data']);
                $status_pembelian = '';
                $status_check = false;
                if ($checking['data']['status'] == "Menunggu" || $checking['data']['status'] == "Success" || $checking['data']['status'] == "Sukses" || $checking['data']['status'] == "Pending") {
                    // dd($checking);
                    $status_check = true;
                    $status_pembelian = "Sukses";
                }else if($checking['data']['status'] == "Batal" || $checking['data']['status'] == "Error" || $checking['data']['status'] == "error" || $checking['data']['status'] == "Gagal"){
                    $status_check = true;
                    $status_pembelian = "Batal";
                }

                if($status_check){
                    if($status_pembelian == "Sukses"){
                        $requestPesan = $this->msg($pembayaran->no_pembeli,$pesan); 
                        Pembelian::where('provider_order_id', $provider_order_id)
                            ->update(['status' => $status_pembelian]);
                    }else{
                        Pembelian::where('provider_order_id', $provider_order_id)
                            ->update(['status' => $status_pembelian, 'log' => json_encode($checking)]);
                    }
                }else{
                                    
                }
            }catch (\Exception $e){
                continue;
                // throw $e;
            }
        }


    }
    
    public function msg($nomor, $msg)
    {
        $data = [
            'api_key' => ENV('WA_KEY'),
            'sender'  => ENV("WA_NUMBER"),
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
          CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }    
}
