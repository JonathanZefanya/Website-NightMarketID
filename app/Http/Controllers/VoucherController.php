<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;
use App\Models\Layanan;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    public function create()
    {
        return view('components.admin.voucher', ['vouchers' => Voucher::orderBy('created_at', 'desc')->paginate(10)]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:vouchers,kode',
            'promo' => 'required|numeric|min:0|max:100',
            'stock' => 'required|numeric|min:0',
            'max_potongan' => 'required|numeric|min:0'
        ]);
        
        $voucher = new Voucher();
        $voucher->kode = $request->kode;
        $voucher->promo = $request->promo;
        $voucher->stock = $request->stock;
        $voucher->max_potongan = $request->max_potongan;
        $voucher->save();
        
        return back()->with('success', 'Berhasil menambahkan voucher');
    }
    
    public function destroy($id)
    {
        Voucher::where('id', $id)->delete();
        
        return back()->with('success', 'Berhasil menghapus voucher');
    }
    
    public function confirm(Request $request)
    {
        $request->validate([
            'voucher' => 'required'
        ]);
        
        $voucher = Voucher::where('kode', $request->voucher)->first();
        
        if(!$voucher) return response()->json(['status' => false, 'message' => 'Voucher tidak ditemukan'], 404);
        if($voucher->stock == 0) return response()->json(['status' => false, 'message' => 'Voucher sudah tidak valid'], 404);
        
        if(isset($request->service)){
            if(Auth::check()){
                if(Auth::user()->role == "Reseller" || Auth::user()->role == "Admin"){
                    $service = Layanan::where('id', $request->service)->select('harga_reseller AS harga')->first();
                }else{
                    $service = Layanan::where('id', $request->service)->select('harga')->first();
                }
            }else{
                $service = Layanan::where('id', $request->service)->select('harga')->first();
            }
            
            $potongan = $service->harga * ($voucher->promo / 100);
            
            if($potongan > $voucher->max_potongan){
                $potongan = $voucher->max_potongan;
            }
            
            $service->harga = $service->harga - $potongan;
            
            return response()->json([
                'status' => true,
                'message' => 'Voucher ditemukan',
                'harga' => 'Rp '. number_format($service->harga, 0, '.', ',')
            ]);
        }
        
        return response()->json([
            'status' => true,
            'message' => 'Voucher ditemukan'
        ]);
    }
    
    public function show($id)
    {
        $data = Voucher::where('id', $id)->first();
        
        $send = "
                <form action='".route("voucher.detail.update", [$id])."' method='POST'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Kode</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->kode. "' name='kode'>
                        </div>
                    </div>                     
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Potongan</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='".$data->promo. "' name='promo'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Stock</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='".$data->stock. "' name='stock'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Max Potongan</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='".$data->max_potongan. "' name='max_potongan'>
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
        $request->validate([
            'kode'  => 'required',
            'promo' => 'required|numeric|min:0|max:100',
            'stock' => 'required|numeric|min:0',
            'max_potongan' => 'required|numeric|min:0'
        ]);
        
        Voucher::where('id', $id)->update([
            'kode' => $request->kode,
            'promo' => $request->promo,
            'stock' => $request->stock,
            'max_potongan' => $request->max_potongan
        ]);
        
        return back()->with('success', 'Berhasil update kode promo');
    }
}
