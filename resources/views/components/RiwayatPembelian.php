<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Auth;

class RiwayatPembelian extends Controller
{
    public function create()
    {
        return view('components.riwayat', ['data' => Pembelian::where('username', Auth::user()->username)->paginate(10)]);
    }

    public function show($id)
    {
        $data = Pembelian::where('username', Auth::user()->username)->where('order_id', $id)->first();
        $zone = $data->zone != null ? "-" . $data->zone : "";

        if ($data->status == "Pending" || $data->status == "Menunggu Pembayaran" || $data->status == "Waiting") {
            $label_pesanan = 'warning';
        } else if ($data->status == "Processing") {
            $label_pesanan = 'info';
        } else if ($data->status == "Success") {
            $label_pesanan = 'success';
        } else {
            $label_pesanan = 'danger';
        }

        $send = '<div class="table-responsive">
                    <table class="table table-bordered text-light">
                        <tbody>
                            <tr>
                                <th>Id Trx</th>
                                <td>' . $id . '</td>
                            </tr>
                            <tr>
                                <th>Layanan</th>
                                <td>' . $data->layanan . '</td>
                            </tr>
                            <tr>
                                <th>Target</th>
                                <td>' . $data->user_id . $zone . '</td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>Rp. ' . number_format($data->harga, 0, ',', '.') . '</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><span class="badge bg-' . $label_pesanan . '">' . $data->status . '</td>
                            </tr>
                            <tr>
                                <th>Tanggal transaksi</th>
                                <td>' . $data->created_at . '</td>
                            </tr>
                        </tbody>
                    </table>
                </div>';

        return $send;
    }
        
}
