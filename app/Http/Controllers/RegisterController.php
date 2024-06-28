<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Berita;
use App\Models\Seting;

class RegisterController extends Controller
{
    public function create()
    {
        return view('components.register',[
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|min:3|unique:users,username|max:255',
            'password' => 'required|min:1|max:255',
            'whatsapp' => 'nullable|regex:/^(\+\d{1,3}[- ]?)?\d{10,12}$/|unique:users,whatsapp',
        ], [
            'nama.required' => 'Harap isi kolom nama!',
            'username.required' => 'Harap isi kolom username!',
            'username.min' => 'Panjang username minimal 3 huruf',
            'username.unique' => 'Username telah digunakan',
            'username.max' => 'Panjang username maximal 255 huruf',
            'password' => 'Harap isi kolom password',
            'password.min' => 'Panjang password minimal 6 huruf',
            'password.max' => 'Panjang password maximal 255 huruf',
            'whatsapp.regex' => 'Format nomor WhatsApp tidak valid',
            'whatsapp.unique' => 'Nomor WhatsApp telah digunakan',
        ]);
        
        $user = new User();
        $user->name = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->balance = 0;
        $user->role = 'Member';
        $user->whatsapp = $request->whatsapp;
        $user->save();

        return redirect(route('login'))->with('success', 'Berhasil melakukan pendaftaran, silakan masuk menggunakan akun anda');
    }
}
