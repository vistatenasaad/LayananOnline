<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\pengajuan_d_k_p;

use App\Tracking;

class DetailController extends Controller
{
    public function detail1($id)
    {
        $data = DB::table('tracking')
            ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
            ->where('pengajuan_d_k_p.id', '=', $id)
            ->get();
        $judul = "Dana Kompensasi Penggunaan Orang Asing";
        return view('Admin.admin1detail', ['data' => $data, 'pagetitle' => $judul]);
    }

    public function verif1($id)
    {
        $data = Tracking::find($id);
        $data->status = "Diproses oleh admin";
        $data->save();
        return redirect('/home1');
    }

    public function tolak1($id)
    {
        // $data = Tracking::find($id);
        // $data->status = "Diproses oleh admin";
        // $data->save();
        // return redirect('/home1');
    }
}
