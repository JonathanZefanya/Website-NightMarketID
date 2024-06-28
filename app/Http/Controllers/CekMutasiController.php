<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekMutasiController extends Controller
{
    public function check($nominal)
    {
        
        $apiKey = ENV("CEKMUTASI_SIGNATURE");
        
        $data = [
            'search' => [
                'date' => [
                    'from' => date('Y-m-d') . ' 00:00:00',
                    'to'   => date('Y-m-d') . ' 23:59:59',
                ],
                'service_code'   => 'bca',
                'account_number' => ENV("NOMOR_REK"),
                'amount'         => $nominal.'.00',
            ],
        ];
        
        
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => 'https://api.cekmutasi.co.id/v1/bank/search',
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_HTTPHEADER     => ['Api-Key: ' . $apiKey, 'Accept: application/json'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4,
        ]);
        
        $result = curl_exec($ch);
        curl_close($ch);      
        
        return json_decode($result,true);
    }
}
