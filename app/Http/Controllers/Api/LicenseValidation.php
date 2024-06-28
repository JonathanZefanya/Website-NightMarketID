<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\License;
use Illuminate\Support\Facades\Validator;

class LicenseValidation extends Controller
{

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'license' => ['required'],
            'domain' => ['required']
        ]);
        
        if ($validator->fails()) {
            return response()->json(['status' => false, 'data' => 'Parameter tidak valid']);
        }  
        
        try{
            $license = License::where('license', $request->license)->first();
            
            if(!$license) return response()->json(['status' => false, 'data' => 'Lisensi tidak valid']);
            
            $domain = explode("//", $request->domain);
            
            if(count($domain) < 2) return response()->json(['status' => false, 'data' => 'Format domain salah']);
            
            if($license->domain != $domain[1]) return response()->json(['status' => false, 'data' => 'Domain tidak valid']);
            
            return response()->json(['status' => true, 'data' => 'License valid']);
        }catch(\Exception $e){
            return response()->json(['status' => false, 'data' => 'License tidak valid']);
        }
    }
}
