<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class Admin1Controller extends Controller
{
    public function datamasuk1()
    {
        $data = DB::table('tracking')
            ->leftjoin('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
            ->leftjoin('permohonan_slipgaji', 'permohonan_slipgaji.id', '=', 'tracking.kode')
            ->leftjoin('permohonan_pajak', 'permohonan_pajak.id', '=', 'tracking.kode')
            ->leftjoin('pengajuan_rptka', 'pengajuan_rptka.id', '=', 'tracking.kode')
            ->leftjoin('pengajuan_imta', 'pengajuan_imta.id', '=', 'tracking.kode')
            ->leftjoin('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
            ->leftjoin('pengajuan_vvt', 'pengajuan_vvt.id', '=', 'tracking.kode')
            ->leftjoin('pengajuan_kitab', 'pengajuan_kitab.id', '=', 'tracking.kode')
            ->leftjoin('pengajuan_naturalisasi', 'pengajuan_naturalisasi.id', '=', 'tracking.kode')
            ->leftjoin('rekom_pendirian_ri', 'rekom_pendirian_ri.id', '=', 'tracking.kode')
            ->leftjoin('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')
            ->leftjoin('pindah_madrasah', 'pindah_madrasah.id', '=', 'tracking.kode')
            ->leftjoin('rekom_sln', 'rekom_sln.id', '=', 'tracking.kode')
            ->leftjoin('rekom_umroh', 'rekom_umroh.id', '=', 'tracking.kode')
            ->leftjoin('rekom_haji', 'rekom_haji.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Data Masuk";
        $subjudul = "Dashboard";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function cekdata1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Pengecekan Data";
        // $subjudul = "Dashboard";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function dataselesai1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuaxn_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Data Selesai";
        // $subjudul = "Dashboard";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function kiblat1()
    {
        $data = DB::table('tracking')
            ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Pengukuran Kiblat";
        $subjudul = "Informasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function slipgaji1()
    {
        $data = DB::table('tracking')
            ->join('permohonan_slipgaji', 'permohonan_slipgaji.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Permohonan Slip Gaji";
        $subjudul = "Informasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function buktipajak1()
    {
        $data = DB::table('tracking')
            ->join('permohonan_pajak', 'permohonan_pajak.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Permohonan Bukti Pajak";
        $subjudul = "Informasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function konsulsyariah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')

        //     ->where('tracking.status', '=', '1')
        //     ->get();
        // $judul = "Konsultasi Syariah";
        // $subjudul = "Konsultasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function batalhajireg1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Pembatalan Haji Reg";
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function batalhajiwft1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Pembatalan Haji Wft";
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function daftarhaji1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Pendaftaran Haji";
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ikrarmi1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Ikrar Masuk Islam";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function sertifhalal1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Sertifikasi Halal";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function limpahanporsihaji1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Pelimpahan Porsi Haji";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
    }
    public function limpahanporsihajisakit1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Pelimpahan Porsi Haji Sakit";
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function legalisir1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Legalisir Ijazah";
        // $subjudul = "Pengesahan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ttdsertif1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Tanda Tangan Sertifikat";
        // $subjudul = "Pengesahan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rptka1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_rptka', 'pengajuan_rptka.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Rencana Penggunaan Tenaga Kerja Asing";
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function imtka1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_imta', 'pengajuan_imta.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Izin Menggunakan Tenaga Kerja Asing";
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function dkpoa1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Dana Kompensasi Pengggunaan Orang Asing";
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function vtt1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_vvt', 'pengajuan_vvt.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Visa Tinggal Terbatas";
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function kitp1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_kitab', 'pengajuan_kitab.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Kartu Izin Tinggal Tetap";
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function naturalisasi1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_naturalisasi', 'pengajuan_naturalisasi.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Naturalisasi";
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijinpm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Ijin Penelitian Madrasah";
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijoptpq1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Ijop TPQ";
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijopm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Ijop Madin";
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijopp1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Ijop Pontren";
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function propbos1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Proposal BOS";
        // $subjudul = "Persetujuan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function blankokua1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Permohonan Blanko KUA";
        // $subjudul = "Persetujuan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ripri1()
    {
        $data = DB::table('tracking')
            ->join('rekom_pendirian_ri', 'rekom_pendirian_ri.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Rekomendasi Ijin Pendirian Rumah Ibadah";
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rbm1()
    {
        $data = DB::table('tracking')
            ->join('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Rekom Bantuan Masjid";
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rskmt1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Rekom Surat Keterangan Majelis Taklim";
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rpm1()
    {
        $data = DB::table('tracking')
            ->join('pindah_madrasah', 'pindah_madrasah.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Rekom Pindah Madrasah";
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function prsln1()
    {
        $data = DB::table('tracking')
            ->join('rekom_sln', 'rekom_sln.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Pengantar Rekom Studi Luar Negeri";
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rbponpes1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')

        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Rekom Bantuan Ponpes/Madin";
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    
    public function rbmf1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Rekom Bantuan Madrasah Formal";
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ritas1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Rekom ITAS";
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rpu1()
    {
        $data = DB::table('tracking')
            ->join('rekom_umroh', 'rekom_umroh.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Rekom Paspor Umroh";
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rph1()
    {
        $data = DB::table('tracking')
            ->join('rekom_haji', 'rekom_haji.id', '=', 'tracking.kode')
            ->where('tracking.status', '=', '1')
            ->get();
        $judul = "Rekom Paspor Haj";
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ppm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Piagam Pendirian Masjid";
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function sijazah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Suket Ijazah";
        // $subjudul = "Pelayanan Lain yang Diperlukan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function mjamaah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '1')
        // ->get();
        // $judul = "Mutasi Jamaah";
        // $subjudul = "Pelayanan Yang diperlukan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
}
