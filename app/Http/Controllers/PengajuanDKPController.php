<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;

class PengajuanDKPController extends Controller
{
    public function PengajuanDKP(){
		return view('Form.PengajuanDKP');
	}

	public function upload(Request $request){
		// insert data
		$request->validate([
			'file_drh' => 'required|mimes:xls,xlsx,pdf|max:2048',
			'file_rptka_imta' => 'required|mimes:xls,xlsx,pdf|max:2048',
			'file_paspor' => 'required|mimes:xls,xlsx,pdf|max:2048',
			'file_polis_asuransi' => 'required|mimes:xls,xlsx,pdf|max:2048',
			'foto' => 'required|mimes:xls,xlsx,pdf|max:2048'
		]);

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
 
        $file_drh = $request->file('file_drh')->getClientOriginalName();
        $path = $request->file('file_drh')->store('public/files');
		$file_rptka_imta = $request->file('file_rptka_imta')->getClientOriginalName();
        $path = $request->file('file_rptka_imta')->store('public/files');
		$file_paspor = $request->file('file_paspor')->getClientOriginalName();
        $path = $request->file('file_paspor')->store('public/files');
		$file_polis_asuransi = $request->file('file_polis_asuransi')->getClientOriginalName();
        $path = $request->file('file_polis_asuransi')->store('public/files');
		$foto = $request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->store('public/files');
        $save = new File;
        $save->file_drh = $file_drh;
        $save->path = $path;
		$save->file_rptka_imta = $file_rptka_imta;
        $save->path = $path;
		$save->file_paspor = $file_paspor ;
        $save->path = $path;
		$save->file_polis_asuransi = $file_polis_asuransi;
        $save->path = $path;
		$save->foto = $foto;
        $save->path = $path;
 
        return redirect('PengajuanDKP')->with('status', 'File Has been uploaded successfully');
	}
}
