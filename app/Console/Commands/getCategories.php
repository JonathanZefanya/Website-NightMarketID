<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Http\Controllers\digiFlazzController;

class getCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Categories';

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
        
        $arrGame = [];
        $arrPulsa = [];

        foreach($res['data'] as $game){
            if($game['category'] == "Games"){
                array_push($arrGame,$game['brand']);
            }else if($game['category'] == "Pulsa"){
                array_push($arrPulsa, $game['brand']);
            }
        }

        foreach(array_unique($arrGame) as $game){
            try{
                $category = new Kategori();
                $category->nama = $game;
                $category->thumbnail = 'null';
                $category->tipe = "game";
                $category->save();            
            }catch(\Exception $e){
                continue;
            }
        }

        foreach(array_unique($arrPulsa) as $pulsa){
            try{
                $category = new Kategori();
                $category->nama = $pulsa;
                $category->thumbnail = 'null';
                $category->tipe = "pulsa";
                $category->save();
            }catch(\Exception $e){
                continue;
            }
        }
    }
}
