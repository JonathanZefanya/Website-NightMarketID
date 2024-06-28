<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Berita;
use App\Models\Seting;

class CariController extends Controller
{
    
    public function create()
    {
       $pembelians = \App\Models\Pembelian::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
                ->select('pembelians.*', 'pembayarans.status AS status_pembayaran', 'metode')
                 ->orderByDesc('pembayarans.id')
                 ->limit(10)
                 ->get();

        return view('components.cari', [
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'pembelians' => $pembelians,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $pembelian = Pembelian::where('order_id', $request->id)->first();
        if($pembelian){
            return redirect(route('pembelian', ['order' => $request->id]));
        }

        return back()->with('error', 'Pesanan tidak ditemukan');
    }
}


