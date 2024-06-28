<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiGamesController extends Controller
{
    public function order($uid = null, $zone = null, $service = null, $order_id = null)
    {
        $target = $uid . $zone;
        $sign = md5(ENV("APIGAMES_SECRET") . ENV("APIGAMES_MERCHANT") . $order_id . $service . $target);
        $api_postdata = array(
            'ref_id' => $order_id,
            'merchant_id' => ENV("APIGAMES_MERCHANT"),
            'produk' => "$service",
            'tujuan' => $target,
            'signature' => $sign,
        );

        $header = array(
            'Content-Type: application/json',
        );

        return $this->connect("/transaksi", $api_postdata, $header);
    }

    public function status($poid)
    {
        return $this->connect("/merchant/" . ENV("APIGAMES_MERCHANT") . "/cektrx/$poid");
    }

    public function connect($url, $data = null, $header = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://v1.apigames.id" . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        if ($data) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } else {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $chresult = curl_exec($ch);
        curl_close($ch);
        $json_result = json_decode($chresult, true);
        return $json_result;
    }
}
