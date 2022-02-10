<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function adduser()
    {
        if (auth()->user()->role == 'superadmin') {
            return view('auth.register');
        } else {
            return back();
        }
    }

    public function saveuser(Request $request)
    {
        $user = new User();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'dkp' => $request->dkp,
            'imta' => $request->imta,
            'kitab' => $request->kitab,
            'naturalisasi' => $request->naturalisasi,
            'rptka' => $request->rptka,
            'vtt' => $request->vtt,
            'kiblat' => $request->kiblat,
            'pajak' => $request->pajak,
            'slipgaji' => $request->slipgaji,
            'madrasah' => $request->madrasah,
            'bmasjid' => $request->bmasjid,
            'haji' => $request->haji,
            'pendirianri' => $request->pendirianri,
            'sln' => $request->sln,
            'umroh' => $request->umroh
        ]);
        return redirect('/home');
    }
}
