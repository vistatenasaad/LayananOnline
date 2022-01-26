<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\rekom_sln;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRekom_sln;
use App\Mail\MailRekom_sln_admin;

class RekomSLNController extends Controller
{
    public function RekomSLN(){
		return view('Form.RekomSLN');
	}

	public function upload(Request $request){

		$rekom_sln = new rekom_sln();
		$rekom_sln->id = 'BATU' . Str::random(7);
		$rekom_sln->nama_siswa = $request->nama_siswa;
		$rekom_sln->asal_madrasah = $request->asal_madrasah;
		$rekom_sln->negara_tujuan = $request->negara_tujuan;
		$rekom_sln->email = $request->email;
		$rekom_sln->whatsapp = $request->whatsapp;

		$file_surat_permohonan = 'file_surat_permohonan' . Str::random(10) . '.' . $request->file_surat_permohonan->getClientOriginalExtension();
		$request->file_surat_permohonan->move(public_path('rekom_sln'), $file_surat_permohonan);
		$rekom_sln->file_surat_permohonan = 'rekom_sln/' . $file_surat_permohonan;

		$file_sk_diterima = 'file_sk_diterima' . Str::random(10) . '.' . $request->file_sk_diterima->getClientOriginalExtension();
		$request->file_sk_diterima->move(public_path('rekom_sln'), $file_sk_diterima);
		$rekom_sln->file_sk_diterima = 'rekom_sln/' . $file_sk_diterima;

		$file_surat_jaminan = 'file_surat_jaminan' . Str::random(10) . '.' . $request->file_surat_jaminan->getClientOriginalExtension();
		$request->file_surat_jaminan->move(public_path('rekom_sln'), $file_surat_jaminan);
		$rekom_sln->file_surat_jaminan = 'rekom_sln/' . $file_surat_jaminan;

		$file_legalisir_ijazah = 'file_legalisir_ijazah' . Str::random(10) . '.' . $request->file_legalisir_ijazah->getClientOriginalExtension();
		$request->file_legalisir_ijazah->move(public_path('rekom_sln'), $file_legalisir_ijazah);
		$rekom_sln->file_legalisir_ijazah = 'rekom_sln/' . $file_legalisir_ijazah;

		$file_scan_paspor = 'file_scan_paspor' . Str::random(10) . '.' . $request->file_scan_paspor->getClientOriginalExtension();
		$request->file_scan_paspor->move(public_path('rekom_sln'), $file_scan_paspor);
		$rekom_sln->file_scan_paspor = 'rekom_sln/' . $file_scan_paspor;

		$file_biodata = 'file_biodata' . Str::random(10) . '.' . $request->file_biodata->getClientOriginalExtension();
		$request->file_biodata->move(public_path('rekom_sln'), $file_biodata);
		$rekom_sln->file_biodata = 'rekom_sln/' . $file_biodata;

		$file_pakta_integritas = 'file_pakta_integritas' . Str::random(10) . '.' . $request->file_pakta_integritas->getClientOriginalExtension();
		$request->file_pakta_integritas->move(public_path('rekom_sln'), $file_pakta_integritas);
		$rekom_sln->file_pakta_integritas = 'rekom_sln/' . $file_pakta_integritas;

		$file_pernyataan = 'file_pernyataan' . Str::random(10) . '.' . $request->file_pernyataan->getClientOriginalExtension();
		$request->file_pernyataan->move(public_path('rekom_sln'), $file_pernyataan);
		$rekom_sln->file_pernyataan = 'rekom_sln/' . $file_pernyataan;

		$details = [
			'id' => $rekom_sln->id,
            'nama_siswa' => $request->nama_siswa,
			'email' => $request->email
        ];

		//captcha
		request()->validate([
			'g-recaptcha-response' => 'required|captcha',
		]);
		
        Mail::to($request->email)->send(new MailRekom_sln($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailRekom_sln_admin($details));

		if($rekom_sln->save()){
			return redirect('RekomSLN')->with('status', 'File Has been uploaded successfully');
		}
	}
}
