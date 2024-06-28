<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Seting;
class TermsandconditionsController extends Controller
{
    public function create()
    {
        return view('components.Terms-and-conditions', [
            'banner' => Berita::where('tipe', 'banner')->get(),
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'popup' => Berita::where('tipe', 'popup')->latest()->first()
        ]);
    }
    
    
}