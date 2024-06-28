<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Berita;
use Illuminate\Support\Carbon;
use App\Http\Controllers\iPaymuController;

class InvoiceController extends Controller
{
    public function create($order)
    {
        $data = Pembelian::where('pembayarans.order_id', $order)->join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
                ->select('pembayarans.status AS status_pembayaran', 'pembayarans.metode AS metode_pembayaran', 'pembayarans.no_pembayaran', 'pembayarans.reference','pembelians.order_id AS id_pembelian',
                        'user_id', 'zone', 'nickname', 'layanan', 'pembayarans.harga AS harga_pembayaran', 'pembelians.created_at AS created_at', 'pembelians.status AS status_pembelian', 'pembayarans.reference')
                ->first();
        
        $expired = Carbon::create($data->created_at)->addDay();
        
        $iPayData = array();
        
        if($data->metode_pembayaran != "OVO" && $data->metode_pembayaran != "GOPAY" && $data->metode_pembayaran != "QRIS" && $data->metode_pembayaran != "BCA" && $data->metode_pembayaran != "BNI" && $data->metode_pembayaran != "MANDIRI"
         && $data->metode_pembayaran != "BRI" && $data->metode_pembayaran != "CIMB" && $data->metode_pembayaran != "BSI" && $data->metode_pembayaran != "BMI" && $data->metode_pembayaran != "PERMATA" && $data->metode_pembayaran != "INDOMARET" && $data->metode_pembayaran != "ALFAMART"){
            $ipay = new iPaymuController();
            $iPayData = $ipay->checkTransaction($data->reference);
        }

    return view('components.invoice', [
        'data' => $data, 'iPayData' => $iPayData, 'expired' => $expired,
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
        'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
}
