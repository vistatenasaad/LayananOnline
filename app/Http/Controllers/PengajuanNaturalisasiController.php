<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use Session;
use App\pengajuan_naturalisasi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPengajuan_naturalisasi;
use App\Mail\MailPengajuan_naturalisasi_admin;
use App\Tracking;

class PengajuanNaturalisasiController extends Controller
{
    public function PengajuanNaturalisasi(){
		return view('Form.PengajuanNaturalisasi');
	}
	public function sukses(){
		Session::flash('sukses','File Has been uploaded successfully');
	}
	public function upload(Request $request){

		$pengajuan_naturalisasi = new pengajuan_naturalisasi();
		$pengajuan_naturalisasi->id = 'BATU' . Str::random(7);
		$pengajuan_naturalisasi->nama_lembaga = $request->nama_lembaga;
		$pengajuan_naturalisasi->email = $request->email;
		$pengajuan_naturalisasi->whatsapp = $request->whatsapp;

		$file_persetujuan = 'file_persetujuan' . Str::random(10) . '.' . $request->file_persetujuan->getClientOriginalExtension();
		$request->file_persetujuan->move(public_path('pengajuan_naturalisasi'), $file_persetujuan);
		$pengajuan_naturalisasi->file_persetujuan = 'pengajuan_naturalisasi/' . $file_persetujuan;

		$file_akte_kelahiran = 'file_akte_kelahiran' . Str::random(10) . '.' . $request->file_akte_kelahiran->getClientOriginalExtension();
		$request->file_akte_kelahiran->move(public_path('pengajuan_naturalisasi'), $file_akte_kelahiran);
		$pengajuan_naturalisasi->file_akte_kelahiran = 'pengajuan_naturalisasi/' . $file_akte_kelahiran;

		$file_pernyataan_bahasa = 'file_pernyataan_bahasa' . Str::random(10) . '.' . $request->file_pernyataan_bahasa->getClientOriginalExtension();
		$request->file_pernyataan_bahasa->move(public_path('pengajuan_naturalisasi'), $file_pernyataan_bahasa);
		$pengajuan_naturalisasi->file_pernyataan_bahasa = 'pengajuan_naturalisasi/' . $file_pernyataan_bahasa;

		$file_skkb_skck = 'file_skkb_skck' . Str::random(10) . '.' . $request->file_skkb_skck->getClientOriginalExtension();
		$request->file_skkb_skck->move(public_path('pengajuan_naturalisasi'), $file_skkb_skck);
		$pengajuan_naturalisasi->file_skkb_skck = 'pengajuan_naturalisasi/' . $file_skkb_skck;

		$file_kitab = 'file_kitab' . Str::random(10) . '.' . $request->file_kitab->getClientOriginalExtension();
		$request->file_kitab->move(public_path('pengajuan_naturalisasi'), $file_kitab);
		$pengajuan_naturalisasi->file_kitab = 'pengajuan_naturalisasi/' . $file_kitab;

		$file_ijazah = 'file_ijazah' . Str::random(10) . '.' . $request->file_ijazah->getClientOriginalExtension();
		$request->file_ijazah->move(public_path('pengajuan_naturalisasi'), $file_ijazah);
		$pengajuan_naturalisasi->file_ijazah = 'pengajuan_naturalisasi/' . $file_ijazah;

		$file_jaminan = 'file_jaminan' . Str::random(10) . '.' . $request->file_jaminan->getClientOriginalExtension();
		$request->file_jaminan->move(public_path('pengajuan_naturalisasi'), $file_jaminan);
		$pengajuan_naturalisasi->file_jaminan = 'pengajuan_naturalisasi/' . $file_jaminan;

		$file_foto = 'file_foto' . Str::random(10) . '.' . $request->file_foto->getClientOriginalExtension();
		$request->file_foto->move(public_path('pengajuan_naturalisasi'), $file_foto);
		$pengajuan_naturalisasi->file_foto = 'pengajuan_naturalisasi/' . $file_foto;

		$details = [
			'id' => $pengajuan_naturalisasi->id,
            'nama_lembaga' => $request->nama_lembaga,
			'email' => $request->email
        ];
		//captcha
		request()->validate([
			'g-recaptcha-response' => 'required|captcha',
		]);
        Mail::to($request->email)->send(new MailPengajuan_naturalisasi($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailPengajuan_naturalisasi_admin($details));

		Tracking::create([
			'kode' => $pengajuan_naturalisasi->id,
			'status' => '1',
			'layanan' => 'pengajuan_naturalisasi'
		]);

		if($pengajuan_naturalisasi->save()){
			return redirect('PengajuanNaturalisasi')->with('sukses', 'File Has been uploaded successfully');
		}
	}
}
