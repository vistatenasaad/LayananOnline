<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailTolak;
use App\Mail\MailSelesai;
use DateTime;
use App\User;

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
        $datafind = Tracking::find($id);
        $tabel = $datafind->layanan;
        $data = DB::table('tracking')
            ->join($tabel, $tabel . '.id', '=', 'tracking.kode')
            ->where($tabel . '.id', '=', $id)
            ->get();
        return view('Tracking', ['data' => $data]);
    }

    public function histori($layanan, $id)
    {
        $data = DB::table('tracking')
            ->join($layanan, $layanan . '.id', '=', 'tracking.kode')
            ->select($layanan . '.*', 'tracking.*', 'tracking.created_at')
            ->where($layanan . '.id', '=', $id)
            ->first();
        $judul = "Histori";
        if ($data->admin_verif != null) {
            $data1 = User::find($data->admin_verif);
            $data->admin_verif = $data1->name;
        }
        if ($data->admin_tolak != null) {
            $data1 = User::find($data->admin_tolak);
            $data->admin_tolak = $data1->name;
        }
        if ($data->admin_selesai != null) {
            $data1 = User::find($data->admin_selesai);
            $data->admin_selesai = $data1->name;
        }
        return view('histori.'.$layanan, ['d' => $data, 'pagetitle' => $judul]);
    }

    public function detail1($id)
    {
        if (auth()->user()->pengukuran_kiblat == '1') {
            $data = DB::table('tracking')
                ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
                ->where('pengukuran_kiblat.id', '=', $id)
                ->get();
            $judul = "Pengukuran Kiblat";
            return view('Admin.detail1pengukurankiblat', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1bantuanmasjid($id)
    {
        if (auth()->user()->rekom_bantuan_masjid == '1') {
            $data = DB::table('tracking')
                ->join('rekom_bantuan_masjid', 'rekom_bantuan_masjid.id', '=', 'tracking.kode')
                ->where('rekom_bantuan_masjid.id', '=', $id)
                ->get();
            $judul = "Rekom Bantuan Masjid";
            return view('Admin.detail1bantuanmasjid', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1dkp($id)
    {
        if (auth()->user()->pengajuan_d_k_p == '1') {
            $data = DB::table('tracking')
                ->join('pengajuan_d_k_p', 'pengajuan_d_k_p.id', '=', 'tracking.kode')
                ->where('pengajuan_d_k_p.id', '=', $id)
                ->get();
            $judul = "Dana Kompensasi Penggunaan Orang Asing";
            return view('Admin.detail1dkp', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1haji($id)
    {
        if (auth()->user()->rekom_haji == '1') {
            $data = DB::table('tracking')
                ->join('rekom_haji', 'rekom_haji.id', '=', 'tracking.kode')
                ->where('rekom_haji.id', '=', $id)
                ->get();
            $judul = "Rekomendasi Paspor Haji";
            return view('Admin.detail1haji', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1imta($id)
    {
        if (auth()->user()->pengajuan_imta == '1') {
            $data = DB::table('tracking')
                ->join('pengajuan_imta', 'pengajuan_imta.id', '=', 'tracking.kode')
                ->where('pengajuan_imta.id', '=', $id)
                ->get();
            $judul = "Izin Menggunakan Tenaga Kerja Asing";
            return view('Admin.detail1imta', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1naturalisasi($id)
    {
        if (auth()->user()->pengajuan_naturalisasi == '1') {
            $data = DB::table('tracking')
                ->join('pengajuan_naturalisasi', 'pengajuan_naturalisasi.id', '=', 'tracking.kode')
                ->where('pengajuan_naturalisasi.id', '=', $id)
                ->get();
            $judul = "Naturalisasi";
            return view('Admin.detail1naturalisasi', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detailpajak($id)
    {
        if (auth()->user()->permohonan_pajak == '1') {
            $data = DB::table('tracking')
                ->join('permohonan_pajak', 'permohonan_pajak.id', '=', 'tracking.kode')
                ->where('permohonan_pajak.id', '=', $id)
                ->get();
            $judul = "Permohonan Bukti Pajak";
            return view('Admin.detailpajak', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1pendirianri($id)
    {
        if (auth()->user()->rekom_pendirian_ri == '1') {
            $data = DB::table('tracking')
                ->join('rekom_pendirian_ri', 'rekom_pendirian_ri.id', '=', 'tracking.kode')
                ->where('rekom_pendirian_ri.id', '=', $id)
                ->get();
            $judul = "Rekomendasi Ijin Pendirian Rumah Ibadah";
            return view('Admin.detail1pendirianri', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1pengajuankitab($id)
    {
        if (auth()->user()->pengajuan_kitab == '1') {
            $data = DB::table('tracking')
                ->join('pengajuan_kitab', 'pengajuan_kitab.id', '=', 'tracking.kode')
                ->where('pengajuan_kitab.id', '=', $id)
                ->get();
            $judul = "Kartu Izin Tinggal Tetap";
            return view('Admin.detail1pengajuankitab', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1pengukurankiblat($id)
    {
        if (auth()->user()->pengukuran_kiblat == '1') {
            $data = DB::table('tracking')
                ->join('pengukuran_kiblat', 'pengukuran_kiblat.id', '=', 'tracking.kode')
                ->where('pengukuran_kiblat.id', '=', $id)
                ->get();
            $judul = "Pengukuran Kiblat";
            return view('Admin.detail1pengukurankiblat', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1pindahmadrasah($id)
    {
        if (auth()->user()->pindah_madrasah == '1') {
            $data = DB::table('tracking')
                ->join('pindah_madrasah', 'pindah_madrasah.id', '=', 'tracking.kode')
                ->where('pindah_madrasah.id', '=', $id)
                ->get();
            $judul = "Rekom Pindah Madrasah";
            return view('Admin.detail1pindahmadrasah', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1rekomsln($id)
    {
        if (auth()->user()->rekom_sln == '1') {
            $data = DB::table('tracking')
                ->join('rekom_sln', 'rekom_sln.id', '=', 'tracking.kode')
                ->where('rekom_sln.id', '=', $id)
                ->get();
            $judul = "Pengantar Rekom Studi Luar Negeri";
            return view('Admin.detail1rekomsln', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1rptka($id)
    {
        if (auth()->user()->pengajuan_rptka == '1') {
            $data = DB::table('tracking')
                ->join('pengajuan_rptka', 'pengajuan_rptka.id', '=', 'tracking.kode')
                ->where('pengajuan_rptka.id', '=', $id)
                ->get();
            $judul = "Rencana Penggunaan Tenaga Kerja Asing";
            return view('Admin.detail1rptka', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1slipgaji($id)
    {
        if (auth()->user()->permohonan_slipgaji == '1') {
            $data = DB::table('tracking')
                ->join('permohonan_slipgaji', 'permohonan_slipgaji.id', '=', 'tracking.kode')
                ->where('permohonan_slipgaji.id', '=', $id)
                ->get();
            $judul = "Permohonan Slip Gaji";
            return view('Admin.detail1slipgaji', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1umroh($id)
    {
        if (auth()->user()->rekom_umroh == '1') {
            $data = DB::table('tracking')
                ->join('rekom_umroh', 'rekom_umroh.id', '=', 'tracking.kode')
                ->where('rekom_umroh.id', '=', $id)
                ->get();
            $judul = "Rekom Paspor Umroh";
            return view('Admin.detail1umroh', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function detail1vvt($id)
    {
        if (auth()->user()->pengajuan_vvt == '1') {
            $data = DB::table('tracking')
                ->join('pengajuan_vvt', 'pengajuan_vvt.id', '=', 'tracking.kode')
                ->where('pengajuan_vvt.id', '=', $id)
                ->get();
            $judul = "Visa Tinggal Terbatas";
            return view('Admin.detail1vvt', ['data' => $data, 'pagetitle' => $judul]);
        } else {
            return back();
        }
    }

    public function verif1($id)
    {
        $data = Tracking::find($id);
        $data->status = "2";
        $data->admin_verif = auth()->user()->id;
        $now = new DateTime();
        $data->tgl_verif = $now;
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
        $data->admin_tolak = auth()->user()->id;
        $now = new DateTime();
        $data->tgl_tolak = $now;
        $data->save();
        return redirect('/home1');
    }

    public function verif2($id)
    {
        $data = Tracking::find($id);
        $tabel = $data->layanan;
        $datafind = DB::table($tabel)
            ->find($id);
        $details = [
            'id' => $id,
            'email' => $datafind->email
        ];

        Mail::to($datafind->email)->send(new MailSelesai($details));

        $data->status = "3";
        $data->admin_selesai = auth()->user()->id;
        $now = new DateTime();
        $data->tgl_selesai = $now;
        $data->save();
        return redirect('/home2');
    }

    public function tolak2($id)
    {
        $data = DB::table('tracking')
            ->where('kode', '=', $id)
            ->get();
        return view('Admin.tolak', ['data' => $data]);
    }

    public function prosestolak2(Request $request)
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
        $data->status = "12";
        $data->admin_tolak = auth()->user()->id;
        $now = new DateTime();
        $data->tgl_tolak = $now;
        $data->save();
        return redirect('/home2');
    }
}
