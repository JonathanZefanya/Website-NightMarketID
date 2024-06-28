<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\License;
use Illuminate\Support\Str;

class LicenseController extends Controller
{
    public function create()
    {
        return view('components.admin.license', ['data' => License::orderBy('created_at', 'desc')->paginate(10)]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'domain'
        ]);
        
        $licenseKey = Str::random('6').'-'.Str::random('6').'-'.Str::random('6').'-'.Str::random('6').'-'.Str::random('6');
        
        $license = new License();
        $license->license = $licenseKey;
        $license->domain = $request->domain;
        $license->save();
        
        return back()->with('success', 'Berhasil membuat license : '. $licenseKey);
    }
    
    public function destroy($id)
    {
        License::where('id', $id)->delete();
        
        return back()->with('success', 'Berhasil menghapus license');
    }
}
