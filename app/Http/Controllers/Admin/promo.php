<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;

class Promo extends Controller
{
    public function create()
    {
        return view('components.admin.promo', ['promo' => Promo::all()]);
    }

    public function post(Request $request)
    {
//dd($request->deskripsi);
        $request->validate([
            'gambar' => 'required|file|mimes:jpg,png',
        ]);

        $file = $request->file('gambar');
        $folder = 'assets/promo';
        $file->move($folder, $file->getClientOriginalName());
        
        $berita = new Promo ();
        $berita->path = "/".$folder."/".$file->getClientOriginalName();
        
        $berita->save();

        return back()->with('success', 'Berhasil upload!');
    }

    public function delete($id)
    {
        $data = Promo::where('id', $id)->select('path')->first();
        Promo::where('id', $id)->delete();
        
        return back()->with('success', 'Berhasil hapus!');

    }
}
