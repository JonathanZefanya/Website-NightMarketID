<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Berita;

class PricelistController extends Controller
{
    public function create()
    {
        $datas = Layanan::join('kategoris', 'layanans.kategori_id', 'kategoris.id')->where('kategoris.status', 'active')->orderBy('created_at', 'desc')
                ->select('layanans.*', 'kategoris.nama AS nama_kategori')->get();

        $kategori = Kategori::get();

        return view('components.pricelist', [
        'datas' => $datas, 'kategoris' => $kategori,
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
        'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
}

