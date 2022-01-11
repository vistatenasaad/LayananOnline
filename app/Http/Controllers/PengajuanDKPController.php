<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\pengajuan_d_k_p;
use Str;

class PengajuanDKPController extends Controller
{
    public function PengajuanDKP(){
		return view('Form.PengajuanDKP');
	}

	public function upload(Request $request){

		$pengajuan_d_k_p = new pengajuan_d_k_p();
		$pengajuan_d_k_p->nama = $request->nama;
		$pengajuan_d_k_p->email = $request->email;
		$pengajuan_d_k_p->whatsapp = $request->whatsapp;

		$file_drh = 'file_drh' . Str::random(10) . '.' . $request->file_drh->getClientOriginalExtension();
		$request->file_drh->move(public_path('files'), $file_drh);
		$pengajuan_d_k_p->file_drh = 'files/' . $file_drh;

		$file_rptka_imta = 'file_rptka_imta' . Str::random(10) . '.' . $request->file_rptka_imta->getClientOriginalExtension();
		$request->file_rptka_imta->move(public_path('files'), $file_rptka_imta);
		$pengajuan_d_k_p->file_rptka_imta = 'files/' . $file_rptka_imta;

		$file_paspor = 'file_paspor' . Str::random(10) . '.' . $request->file_paspor->getClientOriginalExtension();
		$request->file_paspor->move(public_path('files'), $file_paspor);
		$pengajuan_d_k_p->file_paspor = 'files/' . $file_paspor;

		$file_polis_asuransi = 'file_polis_asuransi' . Str::random(10) . '.' . $request->file_polis_asuransi->getClientOriginalExtension();
		$request->file_polis_asuransi->move(public_path('files'), $file_polis_asuransi);
		$pengajuan_d_k_p->file_polis_asuransi = 'files/' . $file_polis_asuransi;

		$foto = 'foto' . Str::random(10) . '.' . $request->foto->getClientOriginalExtension();
		$request->foto->move(public_path('files'), $foto);
		$pengajuan_d_k_p->foto = 'files/' . $foto;

		if($pengajuan_d_k_p->save()){
			return redirect('PengajuanDKP')->with('status', 'File Has been uploaded successfully');
		}
	}
}
