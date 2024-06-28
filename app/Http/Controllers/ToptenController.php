<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Seting;
class ToptenController extends Controller
{
    public function create()
    {
        return view('components.topten', [
            'banner' => Berita::where('tipe', 'banner')->get(),
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'popup' => Berita::where('tipe', 'popup')->latest()->first()
        ]);
    }
    
    
}