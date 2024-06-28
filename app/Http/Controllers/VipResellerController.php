<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VipResellerController extends Controller
{
    public function order($uid = null, $zone = null, $service = null)
    {
        $sign = md5(env("VIP_APIID").env("VIP_APIKEY"));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://vip-reseller.co.id/api/game-feature');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".env("VIP_APIKEY")."&sign=$sign&type=order&service=$service&data_no=$uid&data_zone=$zone");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch), true);
        return $res;
    }

    public function status($poid = null)
    {
        $sign = md5(env("VIP_APIID").env("VIP_APIKEY"));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://vip-reseller.co.id/api/game-feature');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".env("VIP_APIKEY")."&sign=$sign&type=status&trxid=$poid");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch), true);
        return $res;
    }
    
    public function username($uid = null, $zone = null)
    {
        $sign = md5(env("VIP_APIID").env("VIP_APIKEY"));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://vip-reseller.co.id/api/game-feature');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".env("VIP_APIKEY")."&sign=$sign&type=$get_nickname&code=$code&service=$service&data_no=$uid&data_zone=$zone");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch), true);
        return $res;
    }
}
