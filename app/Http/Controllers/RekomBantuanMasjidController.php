<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekom_bantuan_masjid;
use Str;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRekom_bantuanmasjid;
use App\Mail\MailRekom_bantuanmasjid_admin;

class RekomBantuanMasjidController extends Controller
{
    public function RekomBantuanMasjid(){
		return view('Form.RekomBantuanMasjid');
	}
	public function upload(Request $request){
		$rekom_bantuan_masjid = new rekom_bantuan_masjid();
		$rekom_bantuan_masjid->nama_pemohon = $request->nama_pemohon;
		$rekom_bantuan_masjid->nama_masjid = $request->nama_masjid;
		$rekom_bantuan_masjid->email = $request->email;
		$rekom_bantuan_masjid->whatsapp = $request->whatsapp;

		$file_permohonan_rekom = 'file_permohonan_rekom' . Str::random(10) . '.' . $request->file_permohonan_rekom->getClientOriginalExtension();
		$request->file_permohonan_rekom->move(public_path('rekom_bantuanmasjid'), $file_permohonan_rekom);
		$rekom_bantuan_masjid->file_permohonan_rekom = 'rekom_bantuanmasjid/' . $file_permohonan_rekom;

		$file_sk_terdaftar = 'file_sk_terdaftar' . Str::random(10) . '.' . $request->file_sk_terdaftar->getClientOriginalExtension();
		$request->file_sk_terdaftar->move(public_path('rekom_bantuanmasjid'), $file_sk_terdaftar);
		$rekom_bantuan_masjid->file_sk_terdaftar = 'rekom_bantuanmasjid/' . $file_sk_terdaftar;

		$file_permohonan_bantuan = 'file_permohonan_bantuan' . Str::random(10) . '.' . $request->file_permohonan_bantuan->getClientOriginalExtension();
		$request->file_permohonan_bantuan->move(public_path('rekom_bantuanmasjid'), $file_permohonan_bantuan);
		$rekom_bantuan_masjid->file_permohonan_bantuan = 'rekom_bantuanmasjid/' . $file_permohonan_bantuan;

		$details = [
            'nama_pemohon' => $request->nama_pemohon,
			'nama_masjid' => $request->nama_masjid,
			'email' => $request->email
        ];

        Mail::to($request->email)->send(new MailRekom_bantuanmasjid($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailRekom_bantuanmasjid_admin($details));

		if($rekom_bantuan_masjid->save()){
			return redirect('RekomBantuanMasjid')->with('status', 'File Has been uploaded successfully');
		}
	}
}
