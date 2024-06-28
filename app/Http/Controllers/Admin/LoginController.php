<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Seting;

class LoginController extends Controller
{
    public function create()
    {
        return view('components.admin.login', [
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
        'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
    

   public function store(Request $request)
{
    $credential = $request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);
    
    $response = $request->input('g-recaptcha-response');
    $secret = env('CAPTCHA_SECRET');
    
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query(['secret' => $secret, 'response' => $response]));
    curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    curl_close($verify);
    
    $captcha_success = json_decode($response);
    
    if (!$captcha_success->success) {
        return back()->withInput($request->only('username'))->withErrors(['g-recaptcha-response' => 'Captcha invalid!']);
    }
        //patihaseloletusbol
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'Mohon periksa kembali Username dan Password Anda. Kami tidak dapat menemukan akun Anda.');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }    
}
