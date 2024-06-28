<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakciptaController extends Controller
{
    public function create()
    {
        $datas = Layanan::join('kategoris', 'layanans.kategori_id', 'kategoris.id')->where('kategoris.status', 'active')->orderBy('created_at', 'desc')
                ->select('layanans.*', 'kategoris.nama AS nama_kategori')->paginate(10);

        $kategori = Kategori::get();

        return view('components.pricelist', ['datas' => $datas, 'kategoris' => $kategori]);
    }
}