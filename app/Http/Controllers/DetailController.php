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
    public function detail1($id)
    {
        $data = DB::table('tracking')
            ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
            ->where('pengukuran_kiblat.id', '=', $id)
            ->get();
        $judul = "Pengukuran Kiblat";
        return view('Admin.detail1pengukurankiblat', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1bantuanmasjid($id)
    {
        $data = DB::table('tracking')
            ->join('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')
            ->where('rekom_bantuan_masjid.id', '=', $id)
            ->get();
        $judul = "Rekom Bantuan Masjid";
        return view('Admin.detail1pengukurankiblat', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1dkp($id)
    {
        $data = DB::table('tracking')
            ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
            ->where('pengajuan_d_k_p.id', '=', $id)
            ->get();
        $judul = "Dana Kompensasi Penggunaan Orang Asing";
        return view('Admin.detail1dkp', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1haji($id)
    {
        $data = DB::table('tracking')
            ->join('rekom_haji', 'rekom_haji.id', '=', 'tracking.kode')
            ->where('rekom_haji.id', '=', $id)
            ->get();
        $judul = "Rekomendasi Paspor Haji";
        return view('Admin.detail1haji', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1imta($id)
    {
        $data = DB::table('tracking')
            ->join('pengajuan_imta', 'pengajuan_imta.id', '=', 'tracking.kode')
            ->where('pengajuan_imta.id', '=', $id)
            ->get();
        $judul = "Izin Menggunakan Tenaga Kerja Asing";
        return view('Admin.detail1imta', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1naturalisasi($id)
    {
        $data = DB::table('tracking')
            ->join('pengajuan_naturalisasi', 'pengajuan_naturalisasi.id', '=', 'tracking.kode')
            ->where('pengajuan_naturalisasi.id', '=', $id)
            ->get();
        $judul = "Naturalisasi";
        return view('Admin.detail1naturalisasi', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detailpajak($id)
    {
        $data = DB::table('tracking')
            ->join('permohonan_pajak', 'permohonan_pajak.id', '=', 'tracking.kode')
            ->where('permohonan_pajak.id', '=', $id)
            ->get();
        $judul = "Permohonan Bukti Pajak";
        return view('Admin.detailpajak', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1pendirianri($id)
    {
        $data = DB::table('tracking')
            ->join('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')
            ->where('rekom_bantuan_masjid.id', '=', $id)
            ->get();
        $judul = "Rekomendasi Ijin Pendirian Rumah Ibadah";
        return view('Admin.detail1pendirianri', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1pengajuankitab($id)
    {
        $data = DB::table('tracking')
            ->join('pengajuan_kitab', 'pengajuan_kitab.id', '=', 'tracking.kode')
            ->where('pengajuan_kitab.id', '=', $id)
            ->get();
        $judul = "Kartu Izin Tinggal Tetap";
        return view('Admin.detail1pengajuankitab', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1pengukurankiblat($id)
    {
        $data = DB::table('tracking')
            ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
            ->where('pengukuran_kiblat.id', '=', $id)
            ->get();
        $judul = "Pengukuran Kiblat";
        return view('Admin.detail1pengukurankiblat', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1pindahmadrasah($id)
    {
        $data = DB::table('tracking')
            ->join('pindah_madrasah', 'pindah_madrasah.id', '=', 'tracking.kode')
            ->where('pindah_madrasah.id', '=', $id)
            ->get();
        $judul = "Rekom Pindah Madrasah";
        return view('Admin.detail1pindahmadrasah', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1rekomsln($id)
    {
        $data = DB::table('tracking')
            ->join('rekom_sln', 'rekom_sln.id', '=', 'tracking.kode')
            ->where('rekom_sln.id', '=', $id)
            ->get();
        $judul = "Pengantar Rekom Studi Luar Negeri";
        return view('Admin.detail1rekomsln', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1rptka($id)
    {
        $data = DB::table('tracking')
            ->join('pengajuan_rptka', 'pengajuan_rptka.id', '=', 'tracking.kode')
            ->where('pengajuan_rptka.id', '=', $id)
            ->get();
        $judul = "Rencana Penggunaan Tenaga Kerja Asing";
        return view('Admin.detail1rptka', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1slipgaji($id)
    {
        $data = DB::table('tracking')
            ->join('permohonan_slipgaji', 'permohonan_slipgaji.id', '=', 'tracking.kode')
            ->where('permohonan_slipgaji.id', '=', $id)
            ->get();
        $judul = "Permohonan Slip Gaji";
        return view('Admin.detail1slipgaji', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1umroh($id)
    {
        $data = DB::table('tracking')
            ->join('rekom_umroh', 'rekom_umroh.id', '=', 'tracking.kode')
            ->where('rekom_umroh.id', '=', $id)
            ->get();
        $judul = "Rekom Paspor Umroh";
        return view('Admin.detail1umroh', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function detail1vvt($id)
    {
        $data = DB::table('tracking')
            ->join('pengajuan_vvt', 'pengajuan_vvt.id', '=', 'tracking.kode')
            ->where('pengajuan_vvt.id', '=', $id)
            ->get();
        $judul = "Visa Tinggal Terbatas";
        return view('Admin.detail1vvt', ['data' => $data, 'pagetitle' => $judul]);
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
        return redirect('/home1');
    }

    public function tolak2($id)
    {
        // $data = Tracking::find($id);
        // $data->status = "12";
        // $data->save();
        // return redirect('/home1');
    }
}
