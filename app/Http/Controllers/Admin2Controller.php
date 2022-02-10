<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class Admin2Controller extends Controller
{
    public function datamasuk2()
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
            ->where('tracking.status', '=', '2')
            ->get();
        $judul = "Data Masuk";
        $subjudul = "Dashboard";
        return view('admindatamasuk', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function cekdata2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '2')
        // ->get();
        // $judul = "Pengecekan Data";
        // $subjudul = "Dashboard";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function dataselesai2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuaxn_d_k_p.id', '=', 'tracking.kode')
        //     ->where('tracking.status', '=', '2')
        // ->get();
        // $judul = "Data Selesai";
        // $subjudul = "Dashboard";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function kiblat2()
    {
        $data = DB::table('tracking')
            ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Pengukuran Kiblat";
        $subjudul = "Informasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function slipgaji2()
    {
        $data = DB::table('tracking')
            ->join('permohonan_slipgaji', 'permohonan_slipgaji.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Permohonan Slip Gaji";
        $subjudul = "Informasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function buktipajak2()
    {
        $data = DB::table('tracking')
            ->join('permohonan_pajak', 'permohonan_pajak.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Permohonan Bukti Pajak";
        $subjudul = "Informasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function konsulsyariah2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Konsultasi Syariah";
        // $subjudul = "Konsultasi";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function batalhajireg2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Pembatalan Haji Reg";
        // $subjudul = "Pendaftaran";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function batalhajiwft2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Pembatalan Haji Wft";
        // $subjudul = "Pendaftaran";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function daftarhaji2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Pendaftaran Haji";
        // $subjudul = "Pendaftaran";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ikrarmi2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Ikrar Masuk Islam";
        // $subjudul = "Pendaftaran";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function sertifhalal2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Sertifikasi Halal";
        // $subjudul = "Pendaftaran";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function limpahanporsihaji2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Pelimpahan Porsi Haji";
        // $subjudul = "Pendaftaran";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function limpahanporsihajisakit2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Pelimpahan Porsi Haji Sakit";
        // $subjudul = "Pendaftaran";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function legalisir2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Legalisir Ijazah";
        // $subjudul = "Pengesahan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ttdsertif2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Tanda Tangan Sertifikat";
        // $subjudul = "Pengesahan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rptka2()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_rptka', 'pengajuan_rptka.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Rencana Penggunaan Tenaga Kerja Asing";
        $subjudul = "Perijinan";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function imtka2()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_imta', 'pengajuan_imta.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Izin Menggunakan Tenaga Kerja Asing";
        $subjudul = "Perijinan";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function dkpoa2()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Dana Kompensasi Pengggunaan Orang Asing";
        $subjudul = "Perijinan";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function vtt2()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_vvt', 'pengajuan_vvt.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Visa Tinggal Terbatas";
        $subjudul = "Perijinan";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function kitp2()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_kitab', 'pengajuan_kitab.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Kartu Izin Tinggal Tetap";
        $subjudul = "Perijinan";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function naturalisasi2()
    {
        $data = DB::table('tracking')
            ->join('pengajuan_naturalisasi', 'pengajuan_naturalisasi.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Naturalisasi";
        $subjudul = "Perijinan";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijinpm2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Ijin Penelitian Madrasah";
        // $subjudul = "Perizinan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijoptpq2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Ijop TPQ";
        // $subjudul = "Perizinan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijopm2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Ijop Madin";
        // $subjudul = "Perizinan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ijopp2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Ijop Pontren";
        // $subjudul = "Perizinan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function propbos2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Proposal BOS";
        // $subjudul = "Persetujuan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function blankokua2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Permohonan Blanko KUA";
        // $subjudul = "Persetujuan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ripri2()
    {
        $data = DB::table('tracking')
            ->join('rekom_pendirian_ri', 'rekom_pendirian_ri.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Rekomendasi Ijin Pendirian Rumah Ibadah";
        $subjudul = "Rekomendasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rbm2()
    {
        $data = DB::table('tracking')
            ->join('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Rekom Bantuan Masjid";
        $subjudul = "Rekomendasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rskmt2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Rekom Surat Keterangan Majelis Taklim";
        // $subjudul = "Rekomendasi";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rpm2()
    {
        $data = DB::table('tracking')
            ->join('pindah_madrasah', 'pindah_madrasah.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Rekom Pindah Madrasah";
        $subjudul = "Rekomendasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function prsln2()
    {
        $data = DB::table('tracking')
            ->join('rekom_sln', 'rekom_sln.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Pengantar Rekom Studi Luar Negeri";
        $subjudul = "Rekomendasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rbponpes2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Rekom Bantuan Ponpes/Madin";
        // $subjudul = "Rekomendasi";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rbmf2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Rekom Bantuan Madrasah Formal";
        // $subjudul = "Rekomendasi";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ritas2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Rekom ITAS";
        // $subjudul = "Rekomendasi";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rpu2()
    {
        $data = DB::table('tracking')
            ->join('rekom_umroh', 'rekom_umroh.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Rekom Paspor Umroh";
        $subjudul = "Rekomendasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function rph2()
    {
        $data = DB::table('tracking')
            ->join('rekom_haji', 'rekom_haji.id', '=', 'tracking.kode')            
            ->get();
        $judul = "Rekom Paspor Haj";
        $subjudul = "Rekomendasi";
        return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function ppm2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Piagam Pendirian Masjid";
        // $subjudul = "Rekomendasi";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function sijazah2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Suket Ijazah";
        // $subjudul = "Pelayanan Lain yang Diperlukan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
    public function mjamaah2()
    {
        // $data = DB::table('tracking')
        //     ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')        
        // ->get();
        // $judul = "Mutasi Jamaah";
        // $subjudul = "Pelayanan Yang diperlukan";
        // return view('admin2', ['data' => $data, 'pagetitle' => $judul, 'subtitle' => $subjudul]);
    }
}
