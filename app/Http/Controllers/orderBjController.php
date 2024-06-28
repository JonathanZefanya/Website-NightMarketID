<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderBjController extends Controller
{
    public function orderBjf($uid = null, $zone = null)
    {
            $curl = curl_init();
            
            $data = array(
                "product_data_id" => 1936,
                "dataId" => array(
                    array(
                        "name" => "ID",
                        "value" => $uid
                    ),
                    array(
                        "name" => "Server",
                        "value" => $zone
                    )
                )
            );
            
            $payload = json_encode($data);
            
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://bangjeff.com/api/v2/order',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $payload,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: 8580347c-9830-459c-9dee-653806141c33'
                ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            
            echo $response;

    
    }
}    