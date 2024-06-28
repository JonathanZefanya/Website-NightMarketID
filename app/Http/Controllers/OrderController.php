<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\Pembayaran;
use App\Models\Voucher;
use App\Models\Pembelian;
use App\Models\User;
use App\Models\Berita;
use App\Models\Method;
use App\Http\Controllers\DuniaGames;
use App\Http\Controllers\ApiBoController;
use Illuminate\Support\Str;
use App\Http\Controllers\TriPayController;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\iPaymuController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\JulyhyusController;
use App\Http\Controllers\ApiCheckController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\MethodController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    
     public function create(Kategori $kategori)
    {
       $data = Kategori::where('kode', $kategori->kode)->select('nama', 'server_id', 'thumbnail', 'id', 'kode', 'tipe', 'petunjuk', 'bannerlayanan', 'ket_layanan')->first();
        if($data == null) return back();
        
        if(Auth::check()){
            if(Auth::user()->role == "Member"){
                $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan','product_logo', 'harga_reseller AS harga')->orderBy('harga', 'asc')->get();
            }else if(Auth::user()->role == "Platinum" || Auth::user()->role == "Admin"){
                $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan','product_logo', 'harga_platinum AS harga')->orderBy('harga', 'asc')->get();
            }else if(Auth::user()->role == "Gold"){
                $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan','product_logo', 'harga_gold AS harga')->orderBy('harga', 'asc')->get();
            }
        }else{
              $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan', 'harga', 'product_logo')->orderBy('harga', 'asc')->get();
        }  
        
        return view('components.order', [
            'title' => $data->nama,
            'kategori' => $data,
            'nominal' => $layanan,
            'harga' => $layanan,
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'pay_method' => \App\Models\Method::all()
        ]);
    }

    public function price(Request $request)
    {
        if(Auth::check()){
            if(Auth::user()->role == "Member"){
                $data = Layanan::where('id', $request->nominal)->select('harga_reseller AS harga')->first();    
            }else if(Auth::user()->role == "Platinum" || Auth::user()->role == "Admin"){
                $data = Layanan::where('id', $request->nominal)->select('harga_platinum AS harga')->first();
            }else if(Auth::user()->role == "Gold"){
                $data = Layanan::where('id', $request->nominal)->select('harga_gold AS harga')->first();    
            }
        }else{
            $data = Layanan::where('id', $request->nominal)->select('harga AS harga')->first();
        }  
        
        if(isset($request->voucher)){
            $voucher = Voucher::where('kode', $request->voucher)->first();
            
            if(!$voucher){
                $data->harga = $data->harga;
            }else{
                if($voucher->stock == 0){
                    $data->harga = $data->harga;
                }else{
                    $potongan = $data->harga * ($voucher->promo / 100);
                    if($potongan > $voucher->max_potongan){
                        $potongan = $voucher->max_potongan;
                    }
                    
                    $data->harga = $data->harga - $potongan;
                }
            }
            
        }

        return response()->json([
            'status' => true,
            'harga' => "Rp. ".number_format($data->harga, 0, '.', ',')
        ]);
    }


 
    public function confirm(Request $request)
    {
        if($request->ktg_tipe !== 'joki'){
        
            $request->validate([
                'uid' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',
                
            ]);
        
        }else{
        
            $request->validate([
                'email_joki' => 'required',
                'password_joki' => 'required',
                'loginvia_joki' => 'required',
                'nickname_joki' => 'required',
                'request_joki' => 'required',
                'catatan_joki' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',
                
            ]);
        
        }
        
          
            $creds = array(
                'secret' => ENV('CAPTCHA_SECRET'),
                'response' => $request->grecaptcha
            );
       
            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($creds));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);
         
            $status = json_decode($response, true);
            
            if(!$status['success']){ 
                
                return response()->json([
                    'status' => false,
                ],422);
            
            }   
                
            $lolhuman = new DuniaGames();
            $smile = new SmileOneController();
            $apibo = new ApiBoController();
            $apicheck = new ApiCheckController();
            
            if(Auth::user()){
            if(Auth::user()->role =="Member"){
                $dataLayanan = Layanan::where('id', $request->service)->select('harga_reseller AS harga', 'kategori_id')->first();
            }else if(Auth::user()->role =="Platinum" || Auth::user()->role == "Admin"){
                $dataLayanan = Layanan::where('id', $request->service)->select('harga_platinum AS harga', 'kategori_id')->first();
            }else if(Auth::user()->role =="Gold"){
                $dataLayanan = Layanan::where('id', $request->service)->select('harga_gold AS harga', 'kategori_id')->first();
                }
            }else{
                $dataLayanan = Layanan::where('id', $request->service)->select('harga', 'kategori_id')->first();
            }

            if(isset($request->voucher)){
                $voucher = Voucher::where('kode', $request->voucher)->first();
                
                if(!$voucher){
                    $dataLayanan->harga = $dataLayanan->harga;
                }else{
                    if($voucher->stock == 0){
                        $dataLayanan->harga = $dataLayanan->harga;
                    }else{
                        $potongan = $dataLayanan->harga * ($voucher->promo / 100);
                        if($potongan > $voucher->max_potongan){
                            $potongan = $voucher->max_potongan;
                        }
                        
                        $dataLayanan->harga = $dataLayanan->harga - $potongan;
                    }
                }
                
            }

            $dataKategori = Kategori::where('id', $dataLayanan->kategori_id)->select('kode')->first();

            $daftarGameValidasi = ['8-ball-pool', 'arena-of-valor', 'apex-legends', 'call-of-duty', 'dragon-city', 'free-fire', 'genshin-impact', 'higgs-domino', 'honkai-impact', 'lords-mobile', 'marvel-super-war', 'mobile-legend', 'mobile-legends', 'mobile-legends-adventure', 'point-blank', 'ragnarok-m', 'tom-and-jerry', 'top-eleven', 'valorant' ];
    
            if(in_array($dataKategori->kode, $daftarGameValidasi)){
                if ($dataKategori->kode == '8-ball-pool') {
                    $data = $apicheck->check($request->uid, null, '8 Ball Pool');
                } else if($dataKategori->kode == "arena-of-valor"){
                    $data = $apicheck->check($request->uid, null, 'AOV');
                } else if($dataKategori->kode == 'apex-legends'){
                    $data = $apicheck->check($request->uid, null, 'Apex Legends');
                } else if($dataKategori->kode == 'call-of-duty'){
                    $data = $apicheck->check($request->uid, null, 'Call Of Duty');
                } else if($dataKategori->kode == 'dragon-city'){
                    $data = $apicheck->check($request->uid, null, 'Dragon City');
                } else if($dataKategori->kode == "dragon-raja"){
                    $data = $apicheck->check($request->uid, null, 'Dragon Raja');
                } else if($dataKategori->kode == "free-fire"){
                    $data = $apicheck->check($request->uid, null, 'Free Fire');
                } else if($dataKategori->kode == "genshin-impact"){
                    $data = $apicheck->check($request->uid, $request->zone, 'Genshin Impact');
                } else if($dataKategori->kode == "higgs-domino"){
                    $data = $apicheck->check($request->uid, null, 'Higgs Domino');
                } else if($dataKategori->kode == "honkai-impact"){
                    $data = $apicheck->check($request->uid, null, 'Honkai Impact');
                } else if($dataKategori->kode == "lords-mobile"){
                    $data = $apicheck->check($request->uid, null, 'Lords Mobile');
                } else if($dataKategori->kode == "marvel-super-war"){
                    $data = $apicheck->check($request->uid, null, 'Marvel Super War');
                } else if ($dataKategori->kode == 'mobile-legends') {
                    $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
                } else if ($dataKategori->kode == 'mobile-legend') {
                     $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
                } else if ($dataKategori->kode == 'mobile-legends-adventure') {
                     $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends Adventure');
                } else if($dataKategori->kode == "point-blank"){
                    $data = $apicheck->check($request->uid, null, 'Point Blank');
                } else if($dataKategori->kode == "ragnarok-m"){
                    $data = $apicheck->check($request->uid, $request->zone, 'Ragnarok M');
                } else if($dataKategori->kode == "tom-and-jerry"){
                    $data = $apicheck->check($request->uid, null, 'Tom Jerry Chase');
                } else if($dataKategori->kode == "top-eleven"){
                    $data = $apicheck->check($request->uid, null, 'Top Eleven');
                } elseif($dataKategori->kode == "valorant"){
                    $data = $apicheck->check($request->uid, null, 'Valorant');
                }
                if($data['status']['code'] == 1){
                    return response()->json([
                        'status' => false,
                        'data' => isset($data['data']['msg']) ? $data['data']['msg'] : 'Username tidak ditemukan atau coba lagi nanti'
                    ]);
                }
                $username = $data['data']['userNameGame'];
    
             $sendData = "<div class=' align-item-center border-bottom border-dark mb-2 pb-1'>
                        <b>Data Player</b>
                        </div>
                        Nickname : <span id='nick'>" . urldecode($username) . "</span><br>
                        ID : " . $request->uid . " " . $request->zone . "<br>
                        <div class=' align-item-center border-bottom border-dark mt-4 mb-2 pb-1'>
                        <b>Ringkasan Pembelian</b>
                        </div>
                        Harga : Rp. " . number_format($dataLayanan->harga, 0, '.', ',') . "</b><br>
                        Metode Pembayaran : <b>" . strtoupper($request->payment_method) . "</b><br><br>
                        Catatan : Harga diatas belum termasuk biaya admin</div>";

                            
                            
                return response()->json([
                    'status' => true,
                    'data' => $sendData
                ]);
            }else{
                $sendData = "ID : <span id='nick'>$request->uid</span><br>
                            Harga : Rp. ".number_format($dataLayanan->harga, 0, '.', ',').
                            "<br>Metode Pembayaran : ".strtoupper($request->payment_method).
                            "<br><br>Catatan : Harga diatas belum termasuk biaya admin";
                
                return response()->json([
                    'status' => true,
                    'data' => $sendData
                ]);
            }

    }

    public function store(Request $request)
    {
        if($request->ktg_tipe !== 'joki'){
            
            $request->validate([
            'uid' => 'required',
            'nickname' => 'required',
            'service' => 'required|numeric',
            'payment_method' => 'required',
            'nomor' => 'required|numeric',
            ]);
            
        }else{
            
            $request->validate([
                'email_joki' => 'required',
                'password_joki' => 'required',
                'loginvia_joki' => 'required',
                'nickname_joki' => 'required',
                'request_joki' => 'required',
                'catatan_joki' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',
                
            ]);
            
        }

        if(Auth::user()){
            if(Auth::user()->role =="Member"){
                $dataLayanan = Layanan::where('id', $request->service)->select('layanan', 'harga_reseller AS harga', 'kategori_id', 'provider_id', 'provider')->first();
            }else if(Auth::user()->role =="Platinum" || Auth::user()->role == "Admin"){
                $dataLayanan = Layanan::where('id', $request->service)->select('layanan', 'harga_reseller AS harga', 'kategori_id', 'provider_id', 'provider')->first();
            }else if(Auth::user()->role =="Gold"){
                $dataLayanan = Layanan::where('id', $request->service)->select('layanan', 'harga_reseller AS harga', 'kategori_id', 'provider_id', 'provider')->first();
                }
            }else{
                $dataLayanan = Layanan::where('id', $request->service)->select('layanan', 'harga', 'kategori_id', 'provider_id', 'provider')->first();
            }

        if(isset($request->voucher)){
            $voucher = Voucher::where('kode', $request->voucher)->first();
            
            if(!$voucher){
                $dataLayanan->harga = $dataLayanan->harga;
            }else{
                if($voucher->stock == 0){
                    $dataLayanan->harga = $dataLayanan->harga;
                }else{
                    $potongan = $dataLayanan->harga * ($voucher->promo / 100);
                    if($potongan > $voucher->max_potongan){
                        $potongan = $voucher->max_potongan;
                    }
                    
                    $dataLayanan->harga = $dataLayanan->harga - $potongan;
                    $voucher->decrement('stock');
                }
            }
        }  

        $kategori = Kategori::where('id', $dataLayanan->kategori_id)->select('kode')->first();

        $unik = date('Hs');
        $kode_unik = substr(str_shuffle(1234567890),0,3);
        $order_id = 'IV'.$unik.$kode_unik.'FLZ';
        $tripay = new TriPayController();  
      

        $rand = rand(1,1000);
        $no_pembayaran = '';
        $amount = '';
        $reference = '';
        
        if($request->payment_method == "SALDO"){
            $amount = $dataLayanan->harga;
            
        }else if($request->payment_method == "shopeepay" || $request->payment_method == "dana" || $request->payment_method == "ovo"
                                            || $request->payment_method == "BCATF" || $request->payment_method == "MANDIRITF"){
            
            $amount = $dataLayanan->harga + $rand;
            $reference = '';            
            if($request->payment_method == "shopeepay"){
                $no_pembayaran = ENV("SHOPEEPAY_ADMIN");
            }else if($request->payment_method == "dana"){
                $no_pembayaran = ENV("DANA_ADMIN");
            }else if($request->payment_method == "ovo"){
                $no_pembayaran = ENV("OVO_ADMIN");
            }else if($request->payment_method == "BCATF"){
                $no_pembayaran = ENV("BCA_ADMIN");
            }else if($request->payment_method == "MANDIRITF"){
                $no_pembayaran = ENV("MANDIRI_ADMIN");
                
                if($amount < 1000){
                    
                    return response()->json(['status' => false, 'data' => 'Minimum jumlah pembayaran untuk metode pembayaran ini adalah Rp 1.000']);
                    
                }
                
            }

        } else {
            
            
                $listchannel = [];
            
                foreach($tripay->channel()->data as $channel){
                    
                 array_push($listchannel,$channel->code);
                    
                    
                }
                
                
                if(!in_array($request->payment_method,$listchannel)){
                    
                    
                    return response()->json([
                        'status'     => false,
                        'data'    => "Tipe pembayaran tidak sah"
                    ]);
                    
                }
            

            $tripayres = $tripay->request($order_id, $dataLayanan->harga, $request->payment_method, $order_id.'@email.com', $request->nomor);

            
            if($tripayres['success'] != true) return response()->json(['status' => false, 'data' => $tripayres['msg']]);
            
            $no_pembayaran = $tripayres['no_pembayaran'];
            $reference = $tripayres['reference'];
            $amount = $tripayres['amount'];

        }
        
        
         if ($request->payment_method == "shopeepay" || $request->payment_method == "dana" || $request->payment_method == "ovo" || $request->payment_method == "BCATF" || $request->payment_method == "MANDIRITF") {
            $pesan =
            "*Nomor Pesanan: $order_id*\n\n" .
            "Pembelian *$dataLayanan->layanan* telah berhasil dipesan, saat ini kami sedang menunggu pembayaran anda melalui *$request->payment_method* dengan\n
            Jumlah = *Rp. " . number_format($amount, 0, '.', ',') . "*\n\n" .
            "Ke Nomor : *".$no_pembayaran."* (Tanpa dikurangi/Ditambah)\n\n" .
            "Harap melakukan pembayaran sebelum 1x24 jam setelah orderan anda dibuat.\n\n" .
            "Cek invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
            "INI ADALAH PESAN OTOMATIS\n".
            "Created by " .
            "FLAZZSHOP";
        }else if ($request->payment_method == "SALDO") {
            $pesan = 
            "*Pembayaran Berhasil*\n\n" .
            "No Invoice: *$order_id*\n" .
            "Layanan: *$dataLayanan->layanan*\n" .
            "ID : *$request->uid*\n" .
            "Server : *$request->zone*\n" .
            "Nickname : *$request->nickname*\n" .
            "Harga: *Rp. " . number_format($amount, 0, '.', ',') . "*\n" .
            "Status Pembayaran: *Dibayar*\n" .
            "Metode Pembayaran: *$request->payment_method*\n\n" .
            "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
            "INI ADALAH PESAN OTOMATIS";
        } else {
            $pesan = 
            "*Menunggu Pembayaran*\n\n" .
            "No Invoice: *$order_id*\n" .
            "Layanan: *$dataLayanan->layanan*\n" .
            "ID : *$request->uid*\n" .
            "Server : *$request->zone*\n" .
            "Nickname : *$request->nickname*\n" .
            "Harga: *Rp. " . number_format($amount, 0, '.', ',') . "*\n" .
            "Status: *Menunggu Pembayaran*\n" .
            "Metode Pembayaran: *$request->payment_method*\n" .
            "Kode Bayar / Nomor VA : *".$no_pembayaran."*\n\n" .
            
            "*Harap Dibayar Sebelum 3 Jam!* Segera lakukan pembayaran sesuai dengan kode bayar / nomor VA yang tercantum. Pastikan nominal pembayaran juga sesuai dengan total bayar.\n\n" .
            "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
             "INI ADALAH PESAN OTOMATIS\n\n" .
             "Created by " .
             "FLAZZSHOP";
        }
        
        
        if($request->payment_method != "SALDO"){
            $requestPesan = $this->msg($request->nomor,$pesan);

            $pembelian = new Pembelian();
            $pembelian->order_id = $order_id;
            $pembelian->user_id = $request->ktg_tipe !== 'joki' ? $request->uid : '-';
            $pembelian->zone = $request->ktg_tipe !== 'joki' ? $request->zone : '-';
            $pembelian->nickname = $request->ktg_tipe !== 'joki' ? $request->nickname : '-';
            $pembelian->layanan = $dataLayanan->layanan;
            $pembelian->harga = $amount;
            $pembelian->profit = $amount * ENV("MARGIN_PROFIT");
            $pembelian->status = $request->ktg_tipe !== 'joki' ? 'Pending' : '-';
            $pembelian->tipe_transaksi = $request->ktg_tipe !== 'joki' ? 'game' : 'joki';
            $pembelian->save();
    
            $pembayaran = new Pembayaran();
            $pembayaran->order_id = $order_id;
            $pembayaran->harga = $amount;
            $pembayaran->no_pembayaran = $no_pembayaran;
            $pembayaran->no_pembeli = $request->nomor;
            $pembayaran->status = 'Belum Lunas';
            $pembayaran->metode = $request->payment_method;
            $pembayaran->reference = $reference;
            $pembayaran->save();
            
            if($request->ktg_tipe == 'joki'){
                
                
                $jokian = \DB::table('data_joki')->insert([
                    'order_id' => $order_id,
                    'email_joki' => $request->email_joki,
                    'password_joki' => $request->password_joki,
                    'loginvia_joki' => $request->loginvia_joki,
                    'nickname_joki' => $request->nickname_joki,
                    'request_joki' => $request->request_joki,
                    'catatan_joki' => $request->catatan_joki,
                    'status_joki' => 'Proses',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                
            }
            
        }else if($request->payment_method == "SALDO"){
            $user = User::where('username', Auth::user()->username)->first();

            if ($dataLayanan->harga > $user->balance) return response()->json(['status' => false, 'data' => 'Saldo anda tidak cukup']);

             if($dataLayanan->provider == "digiflazz"){
                    $digi = new digiFlazzController;
                    $provider_order_id = rand(1, 100000);
                    $order = $digi->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);
        
                    if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                        $order['status'] = true;
                    } else {
                        $order['status'] = false;
                    }   
                }else if($dataLayanan->provider == "vip"){
                    $vip = new VipResellerController;
                    $order = $vip->order($request->uid, $request->zone, $dataLayanan->provider_id);
                    
                    if($order['result']){
                        $order['status'] = true;
                        $provider_order_id = $order['data']['trxid'];
                    }else{
                        $order['status'] = false;
                    }
                }else if($dataLayanan->provider == "apigames"){
                    $provider_order_id = rand(1, 10000);
                    $apigames = new ApiGamesController;
                    $order = $apigames->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);
                
                    if ($order['data']['status'] == "Sukses") {
                        $order['transactionId'] = $provider_order_id;
                        $order['status'] = true;
                    } else {
                        $order['status'] = false;
                    }                    
                }else if($dataLayanan->provider == "joki"){
                    $provider_order_id = '';
                    $order['status'] = true;
                }
            
            if($order['status']){

                $pesan = "Pembayaran dengan order id : $order_id *TELAH LUNAS*\n\n" .
                    "LAYANAN : $dataLayanan->layanan\n" .
                    "ID : $request->uid($request->zone)\n" .
                    "NICKNAME : $request->nickname\n" .
                    "METODE PEMBAYARAN : $request->payment_method\n" .
                    "HARGA : Rp. " . number_format($dataLayanan->harga, 0, '.', ',') . "\n\n" .
                    "*Kontak Pembeli*\n" .
                    "No HP : $request->nomor\n" .
                    "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id";


                $requestPesan = $this->msg($request->nomor, $pesan);
                $requestPesanAdmin = $this->msg(ENV("NOMOR_ADMIN"), $pesan);

                $user->update([
                    'balance' => $user->balance - $dataLayanan->harga
                ]);

                $pembelian = new Pembelian();
                $pembelian->username = Auth::user()->username;
                $pembelian->order_id = $order_id;
                $pembelian->user_id = $request->ktg_tipe !== 'joki' ? $request->uid : '-';
                $pembelian->zone = $request->ktg_tipe !== 'joki' ? $request->zone : '-';
                $pembelian->nickname = $request->ktg_tipe !== 'joki' ? $request->nickname : '-';
                $pembelian->layanan = $dataLayanan->layanan;
                $pembelian->harga = $dataLayanan->harga;
                $pembelian->profit = $dataLayanan->harga * ENV("MARGIN_PROFIT");
                $pembelian->status = $request->ktg_tipe !== 'joki' ? 'Success' : '-';
                $pembelian->provider_order_id = $provider_order_id ? $provider_order_id : "";
                $pembelian->log = $request->ktg_tipe !== 'joki' ? json_encode($order) : '';
                $pembelian->tipe_transaksi = $request->ktg_tipe !== 'joki' ? 'game' : 'joki';
                $pembelian->save();

                $pembayaran = new Pembayaran();
                $pembayaran->order_id = $order_id;
                $pembayaran->harga = $dataLayanan->harga;
                $pembayaran->no_pembayaran = "SALDO";
                $pembayaran->no_pembeli = $request->nomor;
                $pembayaran->status = 'Lunas';
                $pembayaran->metode = $request->payment_method;
                $pembayaran->reference = $reference;
                $pembayaran->save();      
                
                if($request->ktg_tipe == 'joki'){
                
                
                    $jokian = \DB::table('data_joki')->insert([
                        'order_id' => $order_id,
                        'email_joki' => $request->email_joki,
                        'password_joki' => $request->password_joki,
                        'loginvia_joki' => $request->loginvia_joki,
                        'nickname_joki' => $request->nickname_joki,
                        'request_joki' => $request->request_joki,
                        'catatan_joki' => $request->catatan_joki,
                        'status_joki' => 'Proses',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                
                }
                 
                
                
            }else{
                return response()->json([
                    'status' => false,
                    'data' => 'Server Error'
                ]);
            }
        }

        return response()->json([
            'status' => true,
            'order_id' => $order_id
        ]);
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
          CURLOPT_URL => "https://notif.nightmarketid.my.id/send-message",
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
