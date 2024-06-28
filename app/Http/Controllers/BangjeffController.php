<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BangjeffController extends Controller
{
    private $api_url;
    private $api_key;
    private $client;

    public function __construct()
    {
        $this->api_url = 'https://bangjeff.com/api/v2';
        $this->api_key = env('BJ_API_KEY');
        $this->client = new Client([
            'base_uri' => $this->api_url,
            'headers' => [
                'Authorization' => $this->api_key,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);
    }

    public function order($uid, $zone, $service, $order_id)
    {
        $product_data_id = 889;
        $data = [
            'dataId' => [
                [
                    'name' => 'ID',
                    'value' => $order_id
                ],
                [
                    'name' => 'Server',
                    'value' => $order_id
                ]
            ]
        ];
        $response = $this->client->post('/order', [
            'json' => [
                'product_data_id' => $product_data_id,
                'data' => $data
            ]
        ]);
        $response_body = $response->getBody()->getContents();
        return response($response_body);
    }

    public function status($poid, $pid, $uid, $zone)
    {
        $target = $uid . $zone;
        $sign = md5($this->api_key . strval($poid));
        $data = [
            'command' => 'status-pasca',
            'buyer_sku_code' => $pid,
            'customer_no' => $target,
            'ref_id' => $poid,
            'sign' => $sign
        ];
        $response = $this->client->post('/productsv2', [
            'json' => $data
        ]);
        $response_body = $response->getBody()->getContents();
        return response($response_body);
    }

   public function harga()
{
    $client = new Client([
        'base_uri' => 'https://bangjeff.com/api/v2/',
        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => '12fb3a12-2b05-3e2c-811d-60541618b64e'
        ]
    ]);
    $response = $client->request('GET', 'products?id=32', [
        'query' => [
            'sign' => md5(ENV("BJ_API_KEY")."pricelist")
        ]
    ]);
    $data = json_decode($response->getBody()->getContents());
    return view('pricelist', compact('data'));
  }
}