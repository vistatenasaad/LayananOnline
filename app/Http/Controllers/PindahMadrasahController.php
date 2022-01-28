<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pindah_madrasah;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPindah_madrasah;
use App\Mail\MailPindah_madrasah_admin;

class PindahMadrasahController extends Controller
{
    public function PindahMadrasahController(){
		return view('Form.PindahMadrasah');
	}

	public function upload(Request $request){
		$pindah_madrasah = new pindah_madrasah();
		$pindah_madrasah->id = 'BATU' . Str::random(7);
		$pindah_madrasah->nama_siswa = $request->nama_siswa;
		$pindah_madrasah->asal_madrasah = $request->asal_madrasah;
		$pindah_madrasah->madrasah_dituju = $request->madrasah_dituju;
		$pindah_madrasah->email = $request->email;
		$pindah_madrasah->whatsapp = $request->whatsapp;

		$file_permohonan_rekomendasi = 'file_permohonan_rekomendasi' . Str::random(10) . '.' . $request->file_permohonan_rekomendasi->getClientOriginalExtension();
		$request->file_permohonan_rekomendasi->move(public_path('pindah_madrasah'), $file_permohonan_rekomendasi);
		$pindah_madrasah->file_permohonan_rekomendasi = 'pindah_madrasah/' . $file_permohonan_rekomendasi;

		$file_sk_pindah = 'file_sk_pindah' . Str::random(10) . '.' . $request->file_sk_pindah->getClientOriginalExtension();
		$request->file_sk_pindah->move(public_path('pindah_madrasah'), $file_sk_pindah);
		$pindah_madrasah->file_sk_pindah = 'pindah_madrasah/' . $file_sk_pindah;

		$file_sk_diterima = 'file_sk_diterima' . Str::random(10) . '.' . $request->file_sk_diterima->getClientOriginalExtension();
		$request->file_sk_diterima->move(public_path('pindah_madrasah'), $file_sk_diterima);
		$pindah_madrasah->file_sk_diterima = 'pindah_madrasah/' . $file_sk_diterima;

		$file_rapot_siswa = 'file_rapot_siswa' . Str::random(10) . '.' . $request->file_rapot_siswa->getClientOriginalExtension();
		$request->file_rapot_siswa->move(public_path('pindah_madrasah'), $file_rapot_siswa);
		$pindah_madrasah->file_rapot_siswa = 'pindah_madrasah/' . $file_rapot_siswa;

		$details = [
			'id' => $pindah_madrasah->id,
            'nama_siswa' => $request->nama_siswa,
			'asal_madrasah' => $request->asal_madrasah,
			'madrasah_dituju' => $request->madrasah_dituju,
			'email' => $request->email
        ];

		//captcha
		request()->validate([
			'g-recaptcha-response' => 'required|captcha',
		]);

        Mail::to($request->email)->send(new MailPindah_madrasah($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailPindah_madrasah_admin($details));

		if($pindah_madrasah->save()){
			return redirect('PindahMadrasah')->with('status', 'File Has been uploaded successfully');
		}
	}
}
