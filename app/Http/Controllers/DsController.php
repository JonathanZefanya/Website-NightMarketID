<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Seting;
use Auth;


class DsController extends Controller
{
    public function dashboard()
    {
        return view('components.dashboarduser',[
            'data' => \App\Models\Pembelian::where('username', Auth::user()->username)->get(),
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
    
    public function editProfile()
    {
        return view('components.editprofile',[
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
        'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
    
    public function saveEditProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|min:3|max:255|unique:users,username,'.Auth()->user()->id,
            'password' => 'nullable|min:6|max:255',
        ], [
            'nama.required' => 'Harap isi kolom nama!',
            'username.required' => 'Harap isi kolom username!',
            'username.min' => 'Panjang username minimal 3 huruf',
            'username.unique' => 'Username telah digunakan',
            'username.max' => 'Panjang username maximal 255 huruf',
            'password.min' => 'Panjang password minimal 6 huruf',
            'password.max' => 'Panjang password maximal 255 huruf',
        ]);

        
        $data = [
          'name' => $request->name,
          'username' => $request->username
        ];
        
        if(!empty($request->password)){
            
            $data['password'] = bcrypt($request->password);
            
        }
        
        \App\Models\User::where('id',Auth()->user()->id)->update($data);
        
        return redirect()->back()->with('success', 'Berhasil mengedit profile!');

    }
    
    
}