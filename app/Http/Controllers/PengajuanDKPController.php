<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use Session;
use App\pengajuan_d_k_p;
use App\Tracking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPengajuan_dkp;
use App\Mail\MailPengajuan_dkp_admin;

class PengajuanDKPController extends Controller
{
    public function PengajuanDKP(){
		return view('Form.PengajuanDKP');
	}
	public function sukses(){
		Session::flash('sukses','File Has been uploaded successfully');
	}

	public function upload(Request $request){

		$pengajuan_d_k_p = new pengajuan_d_k_p();
		$pengajuan_d_k_p->id = 'BATU' . Str::random(7);
		$pengajuan_d_k_p->nama = $request->nama;
		$pengajuan_d_k_p->email = $request->email;
		$pengajuan_d_k_p->whatsapp = $request->whatsapp;

		$file_drh = 'file_drh' . Str::random(10) . '.' . $request->file_drh->getClientOriginalExtension();
		$request->file_drh->move(public_path('pengajuan_dkp'), $file_drh);
		$pengajuan_d_k_p->file_drh = 'pengajuan_dkp/' . $file_drh;

		$file_rptka_imta = 'file_rptka_imta' . Str::random(10) . '.' . $request->file_rptka_imta->getClientOriginalExtension();
		$request->file_rptka_imta->move(public_path('pengajuan_dkp'), $file_rptka_imta);
		$pengajuan_d_k_p->file_rptka_imta = 'pengajuan_dkp/' . $file_rptka_imta;

		$file_paspor = 'file_paspor' . Str::random(10) . '.' . $request->file_paspor->getClientOriginalExtension();
		$request->file_paspor->move(public_path('pengajuan_dkp'), $file_paspor);
		$pengajuan_d_k_p->file_paspor = 'pengajuan_dkp/' . $file_paspor;

		$file_polis_asuransi = 'file_polis_asuransi' . Str::random(10) . '.' . $request->file_polis_asuransi->getClientOriginalExtension();
		$request->file_polis_asuransi->move(public_path('pengajuan_dkp'), $file_polis_asuransi);
		$pengajuan_d_k_p->file_polis_asuransi = 'pengajuan_dkp/' . $file_polis_asuransi;

		$foto = 'foto' . Str::random(10) . '.' . $request->foto->getClientOriginalExtension();
		$request->foto->move(public_path('pengajuan_dkp'), $foto);
		$pengajuan_d_k_p->foto = 'pengajuan_dkp/' . $foto;

		$details = [
			'id' => $pengajuan_d_k_p->id,
            'nama' => $request->nama,
			'email' => $request->email
        ];
		//captcha
		// request()->validate([
		// 	'g-recaptcha-response' => 'required|captcha',
		// ]);
        Mail::to($request->email)->send(new MailPengajuan_dkp($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailPengajuan_dkp_admin($details));

		Tracking::create([
			'kode' => $pengajuan_d_k_p->id,
			'status' => '1',
			'layanan' => 'pengajuan_d_k_p'
		]);

		if($pengajuan_d_k_p->save()){
			return redirect('PengajuanDKP')->with('sukses', 'File Has been uploaded successfully');
		}
	}
}
