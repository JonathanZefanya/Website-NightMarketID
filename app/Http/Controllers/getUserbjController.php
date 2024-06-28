<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getUserbjController extends Controller
{
    public function getUserbj()
    {
        $api = \DB::table('setings')->where('id',1)->first();
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://bangjeff.com/api/v2/user',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: $api->bangjeff_apikey'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;

    
    }
}    