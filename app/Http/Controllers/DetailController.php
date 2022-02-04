<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailTolak;

use App\Tracking;
use App\pengajuan_imta;
use App\pengajuan_d_k_p;
use App\pengajuan_kitab;
use App\pengajuan_naturalisasi;
use App\pengajuan_rptka;
use App\pengajuan_vvt;
use App\pengukuran_kiblat;
use App\permohonan_pajak;
use App\permohonan_slipgaji;
use App\pindah_madrasah;
use App\rekom_bantuan_masjid;
use App\rekom_haji;
use App\rekom_pendirian_ri;
use App\rekom_sln;
use App\rekom_umroh;

class DetailController extends Controller
{
    public function tracking(Request $request)
    {
        $id = $request->id;
        $datafind =Tracking::find($id);
        $tabel = $datafind->layanan;
        $data = DB::table('tracking')
            ->join($tabel, $tabel.'.id', '=', 'tracking.kode')
            ->where($tabel.'.id', '=', $id)
            ->get();
        return view('Tracking', ['data' => $data]);
    }

    public function detail1($id)
    {
        $data = DB::table('tracking')
            ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
            ->where('pengukuran_kiblat.id', '=', $id)
            ->get();
        $judul = "Pengukuran Kiblat";
        return view('Admin.detail1pengukurankiblat', ['data' => $data, 'pagetitle' => $judul]);
    }

    public function verif1($id)
    {
        $data = Tracking::find($id);
        $data->status = "2";
        $data->save();
        return redirect('/home1');
    }

    public function tolak1($id)
    {
        $data = DB::table('tracking')
            ->where('kode', '=', $id)
            ->get();
        return view('Admin.tolak', ['data' => $data]);
    }

    public function prosestolak1(Request $request)
    {
        $tabel = $request->layanan;
        $id = $request->kode;
        $data = DB::table($tabel)
            ->find($id);

        // return view('cek', ['data' => $data]);
        $details = [
            'id' => $request->kode,
            'email' => $data->email,
            'pesan' => $request->pesan
        ];
        Mail::to($data->email)->send(new MailTolak($details));

        $data = Tracking::find($id);
        $data->status = "11";
        $data->save();
        return redirect('/home1');
    }

    public function verif2($id)
    {
        $data = Tracking::find($id);
        $data->status = "3";
        $data->save();
        return redirect('/home2');
    }

    public function tolak2($id)
    {
        // $data = Tracking::find($id);
        // $data->status = "12";
        // $data->save();
        // return redirect('/home1');
    }
}
