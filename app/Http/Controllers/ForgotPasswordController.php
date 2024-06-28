<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Berita;
use App\Models\Seting;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ForgotPasswordController extends Controller
{
     public function forgotPassword()
    {
        return view('components.forgotpassword', [
            'banner' => Berita::where('tipe', 'banner')->get(),
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'popup' => Berita::where('tipe', 'popup')->latest()->first()
        ]);
    }
    
    
    public function sendOtp(Request $request)
    {
        $request->validate([
            'nomor' => 'required|numeric'
        ],
        [
            'nomor.required' => 'Harap masukan Nomor',
            'nomor.numeric' => 'nomor tidak valid!'
        ]);
        
        $nomor = $request->nomor;
        
        if($nomor[0] == 0){
            
            $nomor = str_replace($nomor[0],'08',$nomor);
        }
        
        $cek = \App\Models\User::where('whatsapp',$nomor)->first();
        
        if(!$cek){
            
            return back()->with('error','nomor tidak ditemukan!');
            
        }
     
        
        $otp = rand(100000,999999);
        
        $cek->update(['otp' => $otp]);
        
        Session::put('nomor',$nomor);
            
         $data = [
            'api_key' => ENV('WA_KEY'),
            'sender'  => ENV("WA_NUMBER"),
            'number'  => "$nomor",
            'message' => 'KODE OTP : '.$otp.''
        ];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://wa.nightmarketid.my.id/send-message",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($data),
          CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       // return $response;
        
        
        
        return view('components.verifyotp');
        
        
        
    }
    
    
    public function verifyOtp(Request $request)
    {
        
        $nomor = Session::get('nomor');
        
        if(!$nomor){
            
            return redirect('/forgot-password');
            
        }
        
        $otp = '';
        
        foreach($request->otp as $kode){
            
            $otp .= $kode;
            
        }
        
        
        $cek = \App\Models\User::where('whatsapp',$nomor)->where('otp',$otp)->first();
        
        if(!$cek){
            
            return back()->with('error','Kode OTP tidak valid!');
            
        }
        
        $cek->update(['otp' => NULL]);
        
        
        Auth::login($cek);
        
        
        return redirect('/user/edit/profile');
        
        
        
        
        
    }
    
}