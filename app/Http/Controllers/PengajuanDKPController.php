<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanDKPController extends Controller
{
    public function PengajuanDKP(){
		return view('Form.PengajuanDKP');
	}
 
	public function upload(Request $request){
	// insert data
	DB::table('pengajuan_d_k_p')->insert([
		'nama' => $request->nama,
		'email' => $request->email,
		'whatsapp' => $request->whatsapp,
		'file_drh' => $request->file_drh,
		'file_rptka_imta' => $request->file_rptka_imta,
		'file_paspor' => $request->file_paspor,
		'file_polis_asuransi' => $request->file_polis_asuransi,
		'foto' => $request->foto
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/Form.PengajuanDKP');
	}
}
