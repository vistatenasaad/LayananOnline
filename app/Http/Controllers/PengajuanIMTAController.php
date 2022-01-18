<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\pengajuan_imta;
use Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPengajuan_imta;
class PengajuanIMTAController extends Controller
{
    public function PengajuanIMTA(){
		return view('Form.PengajuanIMTA');
	}
	public function upload(Request $request){

		$pengajuan_imta = new pengajuan_imta();
		$pengajuan_imta->nama_lembaga = $request->nama_lembaga;
		$pengajuan_imta->email = $request->email;
		$pengajuan_imta->whatsapp = $request->whatsapp;

		$file_rptka = 'file_rptka' . Str::random(10) . '.' . $request->file_rptka->getClientOriginalExtension();
		$request->file_rptka->move(public_path('pengajuan_imta'), $file_rptka);
		$pengajuan_imta->file_rptka = 'pengajuan_imta/' . $file_rptka;

		$file_paspor = 'file_paspor' . Str::random(10) . '.' . $request->file_paspor->getClientOriginalExtension();
		$request->file_paspor->move(public_path('pengajuan_imta'), $file_paspor);
		$pengajuan_imta->file_paspor = 'pengajuan_imta/' . $file_paspor;

		$file_polis_asuransi = 'file_polis_asuransi' . Str::random(10) . '.' . $request->file_polis_asuransi->getClientOriginalExtension();
		$request->file_polis_asuransi->move(public_path('pengajuan_imta'), $file_polis_asuransi);
		$pengajuan_imta->file_polis_asuransi = 'pengajuan_imta/' . $file_polis_asuransi;

		$file_drh = 'file_drh' . Str::random(10) . '.' . $request->file_drh->getClientOriginalExtension();
		$request->file_drh->move(public_path('pengajuan_imta'), $file_drh);
		$pengajuan_imta->file_drh = 'pengajuan_imta/' . $file_drh;

		$file_ijazah = 'file_ijazah' . Str::random(10) . '.' . $request->file_ijazah->getClientOriginalExtension();
		$request->file_ijazah->move(public_path('pengajuan_imta'), $file_ijazah);
		$pengajuan_imta->file_ijazah = 'pengajuan_imta/' . $file_ijazah;

		$foto = 'foto' . Str::random(10) . '.' . $request->foto->getClientOriginalExtension();
		$request->foto->move(public_path('pengajuan_imta'), $foto);
		$pengajuan_imta->foto = 'pengajuan_imta/' . $foto;

		$details = [
            'nama_lembaga' => $request->nama_lembaga
        ];

        Mail::to($request->email)->send(new MailPengajuan_imta($details));

		if($pengajuan_imta->save()){
			return redirect('PengajuanIMTA')->with('status', 'File Has been uploaded successfully');
		}
	}
}
