<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class Admin1Controller extends Controller
{
    public function datamasuk1()
    {
        $judul = "Data Masuk";
        return view('admin1datamasuk');
    }
    public function cekdata1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pengecekan Data";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function dataselesai1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Data Selesai";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function kiblat1()
    {
        $data = DB::table('tracking')
            ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
            ->get();
        $judul = "Pengukuran Kiblat";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function slipgaji1()
    {
        $data = DB::table('tracking')
            ->join('permohonan_slipgaji', 'permohonan_slipgaji.id', '=', 'tracking.kode')
            ->get();
        $judul = "Permohonan Slip Gaji";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function buktipajak1()
    {
        $data = DB::table('tracking')
            ->join('permohonan_pajak', 'permohonan_pajak.id', '=', 'tracking.kode')
            ->get();
        $judul = "Permohonan Bukti Pajak";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function konsulsyariah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Konsultasi Syariah";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function batalhajireg1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pembatalan Haji Reg";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function batalhajiwft1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pembatalan Haji Wft";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function daftarhaji1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pendaftaran Haji";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ikrarmi1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ikrar Masuk Islam";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function sertifhalal1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Sertifikasi Halal";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function limpahanporsihaji1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pelimpahan Porsi Haji";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function limpahanporsihajisakit1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pelimpahan Porsi Haji Sakit";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function legalisir1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Legalisir Ijazah";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ttdsertif1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Tanda Tangan Sertifikat";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rptka1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_rptka', 'pengajuan_rptka.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rencana Penggunaan Tenaga Kerja Asing";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function imtka1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_imta', 'pengajuan_imta.id', '=', 'tracking.kode')
            ->get();
        $judul = "Izin Menggunakan Tenaga Kerja Asing";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function dkpoa1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
            ->get();
        $judul = "Dana Kompensasi Pengggunaan Orang Asing";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function vtt1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_vvt', 'pengajuan_vvt.id', '=', 'tracking.kode')
            ->get();
        $judul = "Visa Tinggal Terbatas";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function kitp1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_kitab', 'pengajuan_kitab.id', '=', 'tracking.kode')
            ->get();
        $judul = "Kartu Izin Tinggal Tetap";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function naturalisasi1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_naturalisasi', 'pengajuan_naturalisasi.id', '=', 'tracking.kode')
            ->get();
        $judul = "Naturalisasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ijinpm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijin Penelitian Madrasah";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ijoptpq1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijop TPQ";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ijopm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijop Madin";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ijopp1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijop Pontren";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function propbos1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Proposal BOS";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function blankokua1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Permohonan Blanko KUA";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ripri1()
    {
        $data = DB::table('tracking')
            ->join('rekom_pendirian_ri', 'rekom_pendirian_ri.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekomendasi Ijin Pendirian Rumah Ibadah";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rbm1()
    {
        $data = DB::table('tracking')
            ->join('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekom Bantuan Masjid";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rskmt1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Rekom Surat Keterangan Majelis Taklim";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rpm1()
    {
        $data = DB::table('tracking')
            ->join('pindah_madrasah', 'pindah_madrasah.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekom Pindah Madrasah";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function prsln1()
    {
        $data = DB::table('tracking')
            ->join('rekom_sln', 'rekom_sln.id', '=', 'tracking.kode')
            ->get();
        $judul = "Pengantar Rekom Studi Luar Negeri";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rbponpes1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Rekom Bantuan Ponpes/Madin";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rbmf1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Rekom Bantuan Madrasah Formal";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ritas1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Rekom ITAS";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rpu1()
    {
        $data = DB::table('tracking')
            ->join('rekom_umroh', 'rekom_umroh.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekom Paspor Umroh";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function rph1()
    {
        $data = DB::table('tracking')
            ->join('rekom_haji', 'rekom_haji.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekom Paspor Haj";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function ppm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Piagam Pendirian Masjid";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function sijazah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Suket Ijazah";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function mjamaa1h()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Mutasi Jamaah";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
}
