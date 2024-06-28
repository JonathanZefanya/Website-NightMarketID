<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\LayananPpob;
use App\Http\Controllers\digiFlazzController;
use Str;

class getService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Service';

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
        $digiFlazz = new digiFlazzController;
        $res = $digiFlazz->harga();
        
        foreach(Kategori::get() as $kategori){
            foreach($res['data'] as $data){
                if($data['brand'] == $kategori->nama){
                    if($data['category'] == "Games"){
                    
                        $cekgame = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        if(!$cekgame){

                        $layanan = new Layanan();
                        $layanan->kategori_id = $kategori->id;
                        $layanan->layanan = $data['product_name'];
                        $layanan->provider_id = $data['buyer_sku_code'];
                        $layanan->harga = $data['price'] + ($data['price'] * env("MARGIN_PROFIT"));
                        $layanan->profit = $data['price'] * ENV("MARGIN_PROFIT");
                        $layanan->catatan = $data['desc'];
                        $layanan->status = "available";
                        $layanan->save();
                        
                        }else{
                            
                          $cekgame->update([
                             
                             'harga' => $data['price'] + ($data['price'] * $cekgame->profit / 100),
                             'harga_member' => $data['price'] + ($data['price'] * $cekgame->profit_member / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * $cekgame->profit_platinum / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * $cekgame->profit_gold / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                    }else if($data['category'] == "Pulsa"){
                    
                        $cekpulsa = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        
                        if(!$cekpulsa){
                                                    $layanan = new LayananPpob();
                        $layanan->kategori_id = $kategori->id;
                        $layanan->brand = $data['brand'];
                        $layanan->layanan = $data['product_name'];
                        $layanan->provider_id = $data['buyer_sku_code'];
                        $layanan->tipe_layanan = $data['category'];
                        $layanan->tipe = "otomatis";
                        $layanan->harga = $data['price'] + ($data['price'] * env("MARGIN_PROFIT"));
                        $layanan->status = "available";
                        $layanan->save();
                        
                        }else{
                            
                            $cekpulsa->update([
                             
                             'harga' => $data['price'] + ($data['price'] * $cekpulsa->profit / 100),
                             'harga_member' => $data['price'] + ($data['price'] * $cekpulsa->profit_member / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * $cekpulsa->profit_platinum / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * $cekpulsa->profit_gold / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                    }
                }
            }
        }
    }
}
