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
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'pengajuan_d_k_p' => $request->dkp,
            'pengajuan_imta' => $request->imta,
            'pengajuan_kitab' => $request->kitab,
            'pengajuan_naturalisasi' => $request->naturalisasi,
            'pengajuan_rptka' => $request->rptka,
            'pengajuan_vvt' => $request->vtt,
            'pengukuran_kiblat' => $request->kiblat,
            'permohonan_pajak' => $request->pajak,
            'permohonan_slipgaji' => $request->slipgaji,
            'pindah_madrasah' => $request->madrasah,
            'rekom_bantuan_masjid' => $request->bmasjid,
            'rekom_haji' => $request->haji,
            'rekom_pendirian_ri' => $request->pendirianri,
            'rekom_sln' => $request->sln,
            'rekom_umroh' => $request->umroh
        ]);
        return redirect('/home');
    }

    public function edituser($id)
    {
        if (auth()->user()->role == 'superadmin') {
            $user = User::find($id);
            return view('edituser', ['data' => $user]);
        } else {
            return back();
        }
    }

    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->pengajuan_d_k_p = $request->pengajuan_d_k_p;
        $user->pengajuan_imta = $request->pengajuan_imta;
        $user->pengajuan_kitab = $request->pengajuan_kitab;
        $user->pengajuan_naturalisasi = $request->pengajuan_naturalisasi;
        $user->pengajuan_rptka = $request->pengajuan_rptka;
        $user->pengajuan_vvt = $request->pengajuan_vvt;
        $user->pengukuran_kiblat = $request->pengukuran_kiblat;
        $user->permohonan_pajak = $request->permohonan_pajak;
        $user->permohonan_slipgaji = $request->permohonan_slipgaji;
        $user->pindah_madrasah = $request->pindah_madrasah;
        $user->rekom_bantuan_masjid = $request->rekom_bantuan_masjid;
        $user->rekom_haji = $request->rekom_haji;
        $user->rekom_pendirian_ri = $request->rekom_pendirian_ri;
        $user->rekom_sln = $request->rekom_sln;
        $user->rekom_umroh = $request->rekom_umroh;
        $user->save();

        return redirect('/home');
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
