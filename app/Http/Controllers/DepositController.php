<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Berita;
use App\Models\Seting;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function create()
    {
        return view('components.deposit', ['data' => Deposit::where('username', Auth::user()->username)->orderBy('created_at', 'desc')->paginate(10),
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
          'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'metode' => 'required'
        ], [
            'jumlah.numeric' => "Jumlah tidak valid",
            "jumlah.min" => "Jumlah tidak valid",
            'jumlah.required' => "Harap mengisi jumlah",
            'metode.required' => "Harap mengisi metode"
        ]);

        if ($request->metode == "OVO") {
            $nomor = ENV("OVO1_ADMIN");
        } else if ($request->metode == "GOPAY") {
            $nomor = ENV("GOPAY1_ADMIN");
        } else if ($request->metode == "BCA") {
            $nomor = ENV("BCA_ADMIN");
        } else if ($request->metode == "SHOPEPAY") {
            $nomor = ENV("SHOPEPAY_ADMIN");
        } else if ($request->metode == "DANA") {
            $nomor = ENV("DANA_ADMIN");
        } else if ($request->metode == "BRI") {
            $nomor = ENV("BRI_ADMIN");
        } else if ($request->metode == "QRIS") {
            $nomor = '';
        } else {
            return back()->with('error', 'Metode tidak valid');
        }

        $deposit = new Deposit();
        $deposit->username = Auth::user()->username;
        $deposit->metode = $request->metode;
        $deposit->no_pembayaran = $nomor;
        $deposit->jumlah = $request->jumlah;
        $deposit->status = "Pending";
        $deposit->save();

        return back()->with('success', "Berhasil membuat permintaan deposit");
    }
}
