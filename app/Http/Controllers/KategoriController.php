<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function create()
    {
        return view('components.admin.kategori', ['data' => Kategori::orderBy('nama', 'asc')->get()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|file|mimes:jpg,png,webp',
            'bannerlayanan' => 'required|file|mimes:jpg,png,webp',
            'petunjuk' => 'required|file|mimes:jpg,png',
            'nama' => 'required',
            'ket_layanan' => 'required',
            'kode' => 'required|unique:kategoris,kode',
            'serverOption' => 'required',
            'tipe' => 'required'
        ]);

        $file = $request->file('thumbnail');
        $folder = 'assets/thumbnail';
        $file->move($folder, $file->getClientOriginalName());   
        
        $bannerlayanan = $request->file('bannerlayanan');
        $folderBannerlyn = 'assets/bannerlayanan';
        $bannerlayanan->move($folderBannerlyn, $bannerlayanan->getClientOriginalName());
        
        
        $petunjuk = $request->file('petunjuk');
        $folderPetunjuk = 'assets/petunjuk';
        $petunjuk->move($folderPetunjuk, $petunjuk->getClientOriginalName());    
        
        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->kode = $request->kode;
        $kategori->ket_layanan = $request->ket_layanan;
        $kategori->server_id = $request->serverOption == 'ya' ? 1 : 0;
        $kategori->tipe = $request->tipe;
        $kategori->thumbnail = "/".$folder."/".$file->getClientOriginalName();
        $kategori->petunjuk = "/".$folderPetunjuk."/".$petunjuk->getClientOriginalName();
        $kategori->bannerlayanan = "/".$folderBannerlyn."/".$bannerlayanan->getClientOriginalName();
        $kategori->save();

        return back()->with('success', 'Berhasil menambahkan kategori');
    }

    public function delete($id)
    {
        try{
            $data = Kategori::where('id', $id)->select('thumbnail')->first();
            unlink(public_path($data->thumbnail));
            unlink(public_path($data->bannerlayanan));
            unlink(public_path($data->petunjuk));
            Kategori::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }catch(\Exception $e){
            Kategori::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }
    }

    public function update($id, $status)
    {
        $data = Kategori::where('id', $id)->update([
            'status' => $status
        ]);

        return back()->with('success', 'Berhasil update!');
    }

public function detail($id)
    {
        $data = Kategori::where('id', $id)->first();
        
        $send = "
                <form action='".route("kategori.detail.update", [$id])."' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Nama</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->nama. "' name='kategori'>
                        </div>
                    </div>    
                         <div class='mb-3 row'>
                <label class='col-lg-2 col-form-label'>Tipe</label>
                <div class='col-lg-10'>
                    <select class='form-select' name='tipe'>
                        <option value='populer'>Populer</option>
                        <option value='game'>Top up</option>
                        <option value='pulsa'>Pulsa & Data</option>
                        <option value='e-money'>E-Money</option>
                        <option value='voucher'>Voucher</option>
                        <option value='app'>App</option>
                    </select>
                </div>
            </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Kode</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->kode . "' name='kode'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Ket Layanan</label>
                        <div class='col-lg-10'>
                            <textarea class='form-control' name='ket_layanan'> $data->ket_layanan </textarea>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Thumbnail</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->thumbnail . "' name='thumbnail'>
                        </div>
                    </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Banner Layanan</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->bannerlayanan . "' name='bannerlayanan'>
                        </div>
                    </div> 
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Petunjuk</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->petunjuk . "' name='petunjuk'>
                        </div>
                    </div>                        
                         <div class='mb-3 row'>
                <label class='col-lg-2 col-form-label'>Sistem Target</label>
                <div class='col-lg-10'>
                    <select class='form-select' id='customRadio1' name='serverOption'>
                        <option value='tidak'>1. Target ( User ID )</option>
                        <option value='ya'>2. Target ( User ID / Server ID )</option>
                        <option value='tidak'>3. Target ( Custom via code )</option>
                    </select>
                </div>
            </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Status</label>
                        <div class='col-lg-10'>
                            <select class='form-control' name='status'>
                                <option value='active'>Active</option>
                                <option value='unactive'>Unactive</option>
                            </select>
                        </div>
                    </div>                    
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        <button type='submit' class='btn btn-primary'>Simpan</button>
                    </div>
                </form>
        ";

        return $send;        
    }  
    
    public function patch(Request $request, $id)
    {
        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $folder = 'assets/thumbnail';
            $file->move($folder, $file->getClientOriginalName());      
            Kategori::where('id', $id)->update([
                'thumbnail' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        if($request->file('bannerlayanan')){
            $file = $request->file('bannerlayanan');
            $folder = 'assets/bannerlayanan';
            $file->move($folder, $file->getClientOriginalName());      
            Kategori::where('id', $id)->update([
                'bannerlayanan' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        if($request->file('petunjuk')){
            $file = $request->file('petunjuk');
            $folder = 'assets/petunjuk';
            $file->move($folder, $file->getClientOriginalName());      
            Kategori::where('id', $id)->update([
                'petunjuk' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        $pembayaran = Kategori::where('id', $id)->update([
            'nama' => $request->kategori,
            'kode' => $request->kode,
            'ket_layanan' => $request->ket_layanan,
            'tipe' => $request->tipe,
            'status' => $request->status,
            'server_id' => $request->serverOption == 'ya' ? 1 : 0,
        ]);
           
        return back()->with('success', 'Berhasil update kategori');        
    }        
}
