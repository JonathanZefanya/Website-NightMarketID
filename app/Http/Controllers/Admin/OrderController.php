<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Pembayaran;

class OrderController extends Controller
{
    public function create()
    {
        $data = Pembelian::orderBy('pembelians.id', 'desc')->join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
                ->select('pembelians.*', 'pembayarans.status AS status_pembayaran', 'metode')->paginate(10);

        return view('components.admin.transaction', ['data' => $data]);
    }

    public function update($order_id, $status)
    {
        Pembelian::where('order_id', $order_id)->update([
            'status' => $status,
            'updated_at' => now()
        ]);
        return back()->with('success', 'Berhasil memperbarui status ID #' . $order_id);        
    }
}
