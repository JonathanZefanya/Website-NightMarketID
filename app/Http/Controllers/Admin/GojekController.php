<?php

namespace App\Http\Controllers\Admin;

require('GojekPay.php');

use Namdevel\GojekPay;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gojek;
use App\Models\History_Gojek;
use App\Models\Berita;
class GojekController extends Controller
{
    public function create()
    {
        return view('components.admin.gopay-settings', [
            'transaksi' => History_Gojek::all()
            ]);
    }

    public function store(Request $request)
    {
        Gojek::insert(
            [
                'auth_token' => $request->auth_token,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        return back()->with('status', 'Berhasil memasukkan ke database!');
    }

    public function GetOTP($no)
    {
        $app = new GojekPay;
        $get_otp = json_decode($app->loginRequest($no), true);
        $otp_token = $get_otp['data']['otp_token'];
        return response()->json([
            'status' => 'True',
            'otp_token' => $otp_token,
        ]);
    }

    public function VerifOTP(Request $request)
    {
        $app = new GojekPay;
        $Auth = json_decode($app->getAuthToken($request->otp_token, $request->otp), true);
        $accessToken = $Auth['access_token'];

        return response()->json([
            'status' => 'True',
            'auth_token' => $accessToken
        ]);
    }

    public function getTransaction()
    {
        $authToken = Gojek::select('auth_token')->latest()->first();
        $app = new GojekPay($authToken->auth_token);
        $getData = json_decode($app->getTransactionHistory(), true);
        $list_transaksi = $getData['data']['success'];

        $menghapusTransaksiLama = History_Gojek::truncate();

        foreach ($list_transaksi as $transfer) {
            if ($transfer['type'] == "credit") {
                History_Gojek::insert([
                    'tanggal' => $transfer['transacted_at'],
                    'keterangan' => $transfer['description'],
                    'type' => $transfer['type'],
                    'amount' => $transfer['amount']['value'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        return back()->with('status', 'Berhasil refresh data');
    }    
}
