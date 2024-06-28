<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsappController extends Controller
{
    public function create()
    {
        $qr = '';
        if(ENV("WHATSAPP_GATEAWAY_URL")){
            $requestStatus = Http::get(ENV("WHATSAPP_GATEAWAY_URL")."/find/".ENV("APP_NAME"));
            $responseStatus = json_decode($requestStatus->getBody());

            if (!$responseStatus->success) {
                try {
                    $request = Http::post(ENV("WHATSAPP_GATEAWAY_URL")."/session/add", ['id' => ENV("APP_NAME"), 'isLegacy' => false]);
                    $response = json_decode($request->getBody());
                    $qr = $response->data->qr;
                } catch (\Exception $e) {
                }
            }
        }
        return view('components.admin.whatsapp', ['qr' => $qr]);
    }    
}
