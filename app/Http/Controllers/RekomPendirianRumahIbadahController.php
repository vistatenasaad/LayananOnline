<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\rekom_pendirian_ri;
use Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRekom_pendirianRI;

class RekomPendirianRumahIbadahController extends Controller
{
    public function RekomPendirianRumahIbadah(){
		return view('Form.RekomPendirianRumahIbadah');
	}

	public function upload(Request $request){

		$rekom_pendirian_ri = new rekom_pendirian_ri();
		$rekom_pendirian_ri->asal_surat = $request->asal_surat;
		$rekom_pendirian_ri->email = $request->email;
		$rekom_pendirian_ri->whatsapp = $request->whatsapp;

		$file_permohonan_rekom = 'file_permohonan_rekom' . Str::random(10) . '.' . $request->file_permohonan_rekom->getClientOriginalExtension();
		$request->file_permohonan_rekom->move(public_path('rekom_pendirian_ri'), $file_permohonan_rekom);
		$rekom_pendirian_ri->file_permohonan_rekom = 'rekom_pendirian_ri/' . $file_permohonan_rekom;

		$file_susunan_pengurus = 'file_susunan_pengurus' . Str::random(10) . '.' . $request->file_susunan_pengurus->getClientOriginalExtension();
		$request->file_susunan_pengurus->move(public_path('rekom_pendirian_ri'), $file_susunan_pengurus);
		$rekom_pendirian_ri->file_susunan_pengurus = 'rekom_pendirian_ri/' . $file_susunan_pengurus;

		$file_sk_tanah = 'file_sk_tanah' . Str::random(10) . '.' . $request->file_sk_tanah->getClientOriginalExtension();
		$request->file_sk_tanah->move(public_path('rekom_pendirian_ri'), $file_sk_tanah);
		$rekom_pendirian_ri->file_sk_tanah = 'rekom_pendirian_ri/' . $file_sk_tanah;

		$file_sk_domisili = 'file_sk_domisili' . Str::random(10) . '.' . $request->file_sk_domisili->getClientOriginalExtension();
		$request->file_sk_domisili->move(public_path('rekom_pendirian_ri'), $file_sk_domisili);
		$rekom_pendirian_ri->file_sk_domisili = 'rekom_pendirian_ri/' . $file_sk_domisili;

		$file_nama_ktp = 'file_nama_ktp' . Str::random(10) . '.' . $request->file_nama_ktp->getClientOriginalExtension();
		$request->file_nama_ktp->move(public_path('rekom_pendirian_ri'), $file_nama_ktp);
		$rekom_pendirian_ri->file_nama_ktp = 'rekom_pendirian_ri/' . $file_nama_ktp;

		$file_dukungan = 'file_dukungan' . Str::random(10) . '.' . $request->file_dukungan->getClientOriginalExtension();
		$request->file_dukungan->move(public_path('rekom_pendirian_ri'), $file_dukungan);
		$rekom_pendirian_ri->file_dukungan = 'rekom_pendirian_ri/' . $file_dukungan;

		$details = [
            'asal_surat' => $request->asal_surat
        ];

        Mail::to($request->email)->send(new MailRekom_pendirianRI($details));

		if($rekom_pendirian_ri->save()){
			return redirect('RekomPendirianRumahIbadah')->with('status', 'File Has been uploaded successfully');
		}
	}
}
