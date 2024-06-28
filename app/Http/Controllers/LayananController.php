<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Layanan;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function create()
    {
        $datas = Layanan::join('kategoris', 'layanans.kategori_id', 'kategoris.id')->orderBy('created_at', 'desc')
                ->select('layanans.*', 'kategoris.nama AS nama_kategori')->paginate(10);

        $kategori = Kategori::get();

        return view('components.admin.layanan', ['datas' => $datas, 'kategoris' => $kategori]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'harga_reseller' => 'required|numeric',
            'harga_platinum' => 'required|numeric',
            'harga_gold' => 'required|numeric',
            'profit' => 'required|numeric',
            'provider_id' => 'required|unique:layanans,provider_id',
            'provider' => 'required',
            'product_logo' => 'required|file',
        ]);
        
        $img = $request->file('product_logo');
        $filename = Str::random('15') . '.' . $img->extension();
        $img->move('assets/product_logo', $filename);

        $layanan = new Layanan();
        $layanan->kategori_id = $request->kategori;
        $layanan->layanan = $request->nama;
        $layanan->provider_id = $request->provider_id;
        $layanan->harga = $request->harga + ($request->harga * $request->profit / 100);
        $layanan->harga_reseller = $request->harga_reseller + ($request->harga_reseller * $request->profit / 100);
        $layanan->harga_platinum = $request->harga_platinum + ($request->harga_platinum * $request->profit / 100);
        $layanan->harga_gold = $request->harga_gold + ($request->harga_gold * $request->profit / 100);
        $layanan->profit = $request->harga * ($request->profit / 100);
        $layanan->provider = $request->provider;
        $layanan->catatan = '';
        $layanan->status = 'available';
        $layanan->product_logo = '/assets/product_logo/'.$filename;
        $layanan->save();

        return back()->with('success', 'Berhasil menginput layanan');
    }

    public function delete($id)
    {
        Layanan::where('id', $id)->delete();
        return back()->with('success', 'Berhasil menghapus layanan');
    }

    public function update($id, $status)
    {
        Layanan::where('id', $id)->update([
            'status' => $status
        ]);
        return back()->with('success', 'Berhasil mengupdate layanan');
    }
    
    public function detail($id)
    {
        $data = Layanan::where('id', $id)->first();
        
        $send = "
                <form action='".route("layanan.detail.update", [$id])."' method='POST'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Layanan</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->layanan. "' name='layanan'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Provider</label>
                        <div class='col-lg-10'>
                            <select class='form-select' name='provider'>
                                <option value='digiflazz'>Digiflazz</option>
                                <option value='apigames'>API Games</option>
                                <option value='vip'>Vip Reseller</option>
                                <option value='smileone'>SmileOne</option>
                                <option value='bangjeff'>bangjeff</option>
                            </select>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Provider Id</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->provider_id . "' name='provider_id'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga ."' name='harga'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Reseller</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga_reseller ."' name='harga_reseller'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Platinum</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga_platinum ."' name='harga_platinum'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Gold</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga_gold ."' name='harga_gold'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Status</label>
                        <div class='col-lg-10'>
                            <select class='form-control' name='status'>
                                <option value='available'>Available</option>
                                <option value='unavailable'>Unavailable</option>
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
        $layanan = Layanan::where('id', $id)->update([
            'layanan' => $request->layanan,
            'provider' => $request->provider,
            'provider_id' => $request->provider_id,
            'harga_reseller' => $request->harga_reseller,
            'harga_platinum' => $request->harga_platinum,
            'harga_gold' => $request->harga_gold,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);
        
           
        return back()->with('success', 'Berhasil update layanan');        
    }
}
