<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita as BeritaModel;

class Berita extends Controller
{
    public function create()
    {
        return view('components.admin.berita', ['berita' => BeritaModel::all()]);
    }

    public function post(Request $request)
    {
//dd($request->deskripsi);
        $request->validate([
            'banner' => 'required|file|mimes:jpg,png,webp',
            'tipe' => 'required'
        ]);

        $file = $request->file('banner');
        $folder = 'assets/banner';
        $file->move($folder, $file->getClientOriginalName());
        
        $berita = new BeritaModel();
        $berita->path = "/".$folder."/".$file->getClientOriginalName();
        $berita->deskripsi = $request->deskripsi;
        $berita->tipe = $request->tipe;
        $berita->save();

        return back()->with('success', 'Berhasil upload!');
    }

    public function delete($id)
    {
        $data = BeritaModel::where('id', $id)->select('path')->first();
        BeritaModel::where('id', $id)->delete();
        
        return back()->with('success', 'Berhasil hapus!');

    }
}
