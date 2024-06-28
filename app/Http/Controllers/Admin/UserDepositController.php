<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\User;

class UserDepositController extends Controller
{
    public function create()
    {
        return view('components.admin.user-deposit', ['data' => Deposit::orderBy('created_at', 'desc')->paginate(10)]);
    }

    public function patch($id, $status)
    {
        $deposit = Deposit::where('id', $id)->first();

        $user = User::where('username', $deposit->username)->first();

        $user->update([
            'balance' => $deposit->jumlah + $user->balance
        ]);

        $deposit->update([
            'status' => $status
        ]);

        return back()->with('success', 'Berhasil konfirmasi deposit');
    }
}
