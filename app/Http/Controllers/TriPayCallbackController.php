<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pembelian;
use App\Models\Layanan;
use App\Models\Kategori;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\JulyhyusController;
use Illuminate\Support\Facades\Http;

class TriPayCallbackController extends Controller
{
    public function handle(Request $request)
    {
        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, ENV("TRIPAY_PRIVATE_KEY"));

        if ($signature !== (string) $callbackSignature) {
            return 'Invalid signature';
        }

        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return 'Invalid callback event, no action was taken';
        }

        $data = json_decode($json);
        $ref = $data->reference;

        $invoice = Pembayaran::where('reference', $ref)
            ->where('status', 'Belum Lunas')
            ->first();

        $order_id = $invoice->order_id;
        $dataPembeli = Pembelian::where('order_id', $order_id)->first();
        $dataLayanan = Layanan::where('layanan', $dataPembeli->layanan)->first();
        $dataKategori = Kategori::where('id', $dataLayanan->kategori_id)->first();

        $pesan = "Pembayaran Rp " . number_format($dataPembeli->harga, 0, '.', ',') . " Berhasil\n\n" .
        "*Estimasi Proses Pengisian*\n" .
        "- 1-15 Menit Max 24 Jam Untuk Top Up All Game\n" .
        "- 3-7 Jam Max 24 Jam Untuk Aplikasi Premium\n" .
        "- Diamond Slow : *15-360 Menit Jika Event/Ramai Maksimal 24 Jam*\n\n" .
        "INI ADALAH PESAN OTOMATIS";

        $zoneSend = $dataPembeli->zone == null ? "" : "($dataPembeli->zone)\n";
        $nickname = $dataPembeli->nickname == null ? '' : "Nickname : $dataPembeli->nickname\n";

        $pesanAdmin = "*PEMBAYARAN-$order_id* TELAH LUNAS\n\n" .
        "LAYANAN : $dataPembeli->layanan\n" .
        "USER ID : $dataPembeli->user_id $zoneSend\n" .
        $nickname .
            "PEMBAYARAN : $invoice->metode\n" .
            "JUMLAH : Rp. " . number_format($invoice->harga, 0, '.', ',') . "\n\n" .
            "*Kontak Pembeli*\n" .
            "No HP : $invoice->no_pembeli\n" .
            "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id";

        $uid = $dataPembeli->user_id;
        $zone = $dataPembeli->zone;
        $provider_id = $dataLayanan->provider_id;

        if (!$invoice) {
            return 'Invoice not found or current status is not UNPAID';
        }

        if (intval($data->total_amount) !== (int) $invoice->harga) {
            return 'Invalid amount';
        }

       if ($data->status == "PAID") {
            
                $requestPesan = $this->msg(ENV('NOMOR_ADMIN'), $pesanAdmin);
		        $pesanPembeli = $this->msg($invoice->no_pembeli, $pesan);
           
                if($dataLayanan->provider == "digiflazz"){
                    $provider_order_id = rand(1, 10000);
                    $digiFlazz = new digiFlazzController;
                    $order = $digiFlazz->order($uid, $zone, $provider_id, $provider_order_id);
    
                    if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                        $order['data']['status'] = true;
                        $order['transactionId'] = $provider_order_id;
                    } else {
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "vip"){
                    $vip = new VipResellerController;
                    $order = $vip->order($uid, $zone, $provider_id);
                    
                    if($order['result']){
                        $order['data']['status'] = $order['result'];
                        $order['transactionId'] = $order['data']['trxid'];
                    }else{
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "apigames"){
                    $provider_order_id = rand(1, 10000);
                    $apigames = new ApiGamesController;
                    $order = $apigames->order($uid, $zone, $provider_id, $provider_order_id);
    
                    if($order['data']['status'] == "Sukses"){
                        $order['transactionId'] = $provider_order_id;
                        $order['data']['status'] = true;
                    }else{
                        $order['data']['status'] = false;
                    }
                }
            
                if ($order['data']['status']) { // Jika pembelian sukses
                
                $pesanSukses = 
                "*Pembelian Sukses*\n\n" .
                "No Invoice: *$order_id*\n" .
                "Layanan: *$dataPembeli->layanan*\n" .
                "ID : *$dataPembeli->user_id*\n" .
                "Server : *$dataPembeli->zone*\n" .
                "Nickname : *$dataPembeli->nickname*\n" .
                "Harga: *Rp. " . number_format($invoice->harga, 0, '.', ',') . "*\n" .
                "Status Pembelian: *Sukses*\n" .
               "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
               "INI ADALAH PESAN OTOMATIS";
               
               $pesanSuksesAdmin = 
                "*Pembelian Sukses*\n\n" .
                "No Invoice: *$order_id*\n" .
                "Layanan: *$dataPembeli->layanan*\n" .
                "ID : *$dataPembeli->user_id*\n" .
                "Server : *$dataPembeli->zone*\n" .
                "Nickname : *$dataPembeli->nickname*\n" .
                "Harga: *Rp. " . number_format($invoice->harga, 0, '.', ',') . "*\n" .
                "Status Pembelian: *Sukses*\n\n" .
                "*Kontak Pembeli*\n" .
                "No HP : $invoice->no_pembeli\n" .
               "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
               "INI ADALAH PESAN OTOMATIS";

                $requestSuksesAdmin = $this->msg(ENV('NOMOR_ADMIN'), $pesanSuksesAdmin);
		$requestSukses = $this->msg($invoice->no_pembeli, $pesanSukses);

                    $invoice->update(['status' => 'Sukses']);

                    $dataPembeli->update([
                        'provider_order_id' => isset($order['transactionId']) ? $order['transactionId'] : 0,
                        'status' => 'Sukses',
                        'log' => json_encode($order)
                    ]);

                } else { //jika pembelian gagal

                    $dataPembeli->update([
                        'status' => 'Batal',
                        'log' => json_encode($order)
                    ]);

                }
            
            $invoice->update(['status' => 'Lunas']);

            return response()->json(['success' => true]);

        } else if ($data->status == "EXPIRED" || $data->status == "FAILED") {

            $invoice->update(['status' => 'Batal']);
            return response()->json(['success' => true]);

        } else {

            return response()->json(['error' => 'Unrecognized payment status']);

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
          CURLOPT_URL => "https://waysender-v2.ridped.com/apiv2/send-message.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($data))
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }    
}