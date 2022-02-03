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
        //     ->get();
        // $judul = "Pengecekan Data";
        // $subjudul = "Dashboard";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function dataselesai1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuaxn_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Data Selesai";
        // $subjudul = "Dashboard";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
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
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Informasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
            ->get();
        $judul = "Permohonan Bukti Pajak";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Informasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function konsulsyariah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
<<<<<<< HEAD
        // $judul = "Permohonan Bukti Pajak";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $judul = "Konsultasi Syariah";
        // $subjudul = "Konsultasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function batalhajireg1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pembatalan Haji Reg";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function batalhajiwft1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pembatalan Haji Wft";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function daftarhaji1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Pendaftaran Haji";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
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
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pendaftaran";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function legalisir1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Legalisir Ijazah";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pengesahan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ttdsertif1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Tanda Tangan Sertifikat";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pengesahan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rptka1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_rptka', 'pengajuan_rptka.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rencana Penggunaan Tenaga Kerja Asing";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function imtka1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_imta', 'pengajuan_imta.id', '=', 'tracking.kode')
            ->get();
        $judul = "Izin Menggunakan Tenaga Kerja Asing";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function dkpoa1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
            ->get();
        $judul = "Dana Kompensasi Pengggunaan Orang Asing";
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function vtt1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_vvt', 'pengajuan_vvt.id', '=', 'tracking.kode')
            ->get();
        $judul = "Visa Tinggal Terbatas";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function kitp1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_kitab', 'pengajuan_kitab.id', '=', 'tracking.kode')
            ->get();
        $judul = "Kartu Izin Tinggal Tetap";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function naturalisasi1()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_naturalisasi', 'pengajuan_naturalisasi.id', '=', 'tracking.kode')
            ->get();
        $judul = "Naturalisasi";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Perijinan";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ijinpm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijin Penelitian Madrasah";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ijoptpq1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijop TPQ";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ijopm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijop Madin";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ijopp1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Ijop Pontren";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Perizinan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function propbos1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Proposal BOS";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Persetujuan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function blankokua1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Permohonan Blanko KUA";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Persetujuan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ripri1()
    {
        $data = DB::table('tracking')
            ->join('rekom_pendirian_ri', 'rekom_pendirian_ri.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekomendasi Ijin Pendirian Rumah Ibadah";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rbm1()
    {
        $data = DB::table('tracking')
            ->join('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekom Bantuan Masjid";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rskmt1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Rekom Surat Keterangan Majelis Taklim";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rpm1()
    {
        $data = DB::table('tracking')
            ->join('pindah_madrasah', 'pindah_madrasah.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekom Pindah Madrasah";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function prsln1()
    {
        $data = DB::table('tracking')
            ->join('rekom_sln', 'rekom_sln.id', '=', 'tracking.kode')
            ->get();
        $judul = "Pengantar Rekom Studi Luar Negeri";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rbponpes1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
<<<<<<< HEAD
        // $judul = "Rekom Bantuan Ponpes/ Madin";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $judul = "Rekom Bantuan Ponpes/Madin";
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rbmf1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Rekom Bantuan Madrasah Formal";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ritas1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Rekom ITAS";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rpu1()
    {
        $data = DB::table('tracking')
            ->join('rekom_umroh', 'rekom_umroh.id', '=', 'tracking.kode')
            ->get();
        $judul = "Rekom Paspor Umroh";
<<<<<<< HEAD
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function rph1()
    {
        $data = DB::table('tracking')
            ->join('rekom_haji', 'rekom_haji.id', '=', 'tracking.kode')
            ->get();
<<<<<<< HEAD
        $judul = "Rekom Paspor Haji";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        $judul = "Rekom Paspor Haj";
        $subjudul = "Rekomendasi";
        return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function ppm1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Piagam Pendirian Masjid";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Rekomendasi";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function sijazah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Suket Ijazah";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pelayanan Lain yang Diperlukan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
    public function mjamaah1()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->get();
        // $judul = "Mutasi Jamaah";
<<<<<<< HEAD
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul]);
=======
        // $subjudul = "Pelayanan Yang diperlukan";
        // return view('admin1', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
    }
}
