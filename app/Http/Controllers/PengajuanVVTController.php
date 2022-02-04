<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengajuan_vvt;
use Illuminate\Support\Str;
use DB;
use File;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPengajuan_vvt;
use App\Mail\MailPengajuan_vvt_admin;
use App\Tracking;

class PengajuanVVTController extends Controller
{
    public function pengajuan_vvt(){
		return view('Form.PengajuanVVT');
	}
	public function sukses(){
		Session::flash('sukses','File Has been uploaded successfully');
	}
	public function upload(Request $request){
		$pengajuan_vvt = new pengajuan_vvt();
		$pengajuan_vvt->id = 'BATU' . Str::random(7);
		$pengajuan_vvt->nama_lembaga = $request->nama_lembaga;
		$pengajuan_vvt->email = $request->email;
		$pengajuan_vvt->whatsapp = $request->whatsapp;

		$file_legalitas = 'file_legalitas' . Str::random(10) . '.' . $request->file_legalitas->getClientOriginalExtension();
		$request->file_legalitas->move(public_path('pengajuan_vvt'), $file_legalitas);
		$pengajuan_vvt->file_legalitas = 'pengajuan_vvt/' . $file_legalitas;

		$file_drh = 'file_drh' . Str::random(10) . '.' . $request->file_drh->getClientOriginalExtension();
		$request->file_drh->move(public_path('pengajuan_vvt'), $file_drh);
		$pengajuan_vvt->file_drh = 'pengajuan_vvt/' . $file_drh;

		$file_ijazah = 'file_ijazah' . Str::random(10) . '.' . $request->file_ijazah->getClientOriginalExtension();
		$request->file_ijazah->move(public_path('pengajuan_vvt'), $file_ijazah);
		$pengajuan_vvt->file_ijazah = 'pengajuan_vvt/' . $file_ijazah;

		$file_rptka = 'file_rptka' . Str::random(10) . '.' . $request->file_rptka->getClientOriginalExtension();
		$request->file_rptka->move(public_path('pengajuan_vvt'), $file_rptka);
		$pengajuan_vvt->file_rptka = 'pengajuan_vvt/' . $file_rptka;

		$file_statistik = 'file_statistik' . Str::random(10) . '.' . $request->file_statistik->getClientOriginalExtension();
		$request->file_statistik->move(public_path('pengajuan_vvt'), $file_statistik);
		$pengajuan_vvt->file_statistik = 'pengajuan_vvt/' . $file_statistik;

		$file_paspor = 'file_paspor' . Str::random(10) . '.' . $request->file_paspor->getClientOriginalExtension();
		$request->file_paspor->move(public_path('pengajuan_vvt'), $file_paspor);
		$pengajuan_vvt->file_paspor = 'pengajuan_vvt/' . $file_paspor;

		$file_polis_asuransi = 'file_polis_asuransi' . Str::random(10) . '.' . $request->file_polis_asuransi->getClientOriginalExtension();
		$request->file_polis_asuransi->move(public_path('pengajuan_vvt'), $file_polis_asuransi);
		$pengajuan_vvt->file_polis_asuransi = 'pengajuan_vvt/' . $file_polis_asuransi;

		$foto = 'foto' . Str::random(10) . '.' . $request->foto->getClientOriginalExtension();
		$request->foto->move(public_path('pengajuan_vvt'), $foto);
		$pengajuan_vvt->foto = 'pengajuan_vvt/' . $foto;

		$permohonan_vvt = 'permohonan_vvt' . Str::random(10) . '.' . $request->permohonan_vvt->getClientOriginalExtension();
		$request->permohonan_vvt->move(public_path('pengajuan_vvt'), $permohonan_vvt);
		$pengajuan_vvt->permohonan_vvt = 'pengajuan_vvt/' . $permohonan_vvt;

		$details = [
			'id' => $pengajuan_vvt->id,
            'nama_lembaga' => $request->nama_lembaga,
			'email' => $request->email
        ];

		//captcha
		request()->validate([
			'g-recaptcha-response' => 'required|captcha',
		]);
		
        Mail::to($request->email)->send(new MailPengajuan_vvt($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailPengajuan_vvt_admin($details));

		Tracking::create([
			'kode' => $pengajuan_vvt->id,
			'status' => '1',
			'layanan' => 'pengajuan_vvt'
		]);

		if($pengajuan_vvt->save()){
			return view('Form.PengajuanVVT_sm', ['details' => $pengajuan_vvt->id])->with('sukses', 'File Has been uploaded successfully');
		}
	}

	//pdf
	public function cetak_pdf($id){

    	$pengajuan_vvt = pengajuan_vvt::find($id);

    	$pdf = PDF::loadview('Form.PengajuanVVT_pdf',['pengajuan_vvt'=>$pengajuan_vvt]);
    	 return $pdf->download('Pengajuan-VVT.pdf');
		 return view('Form.PengajuanVVT_sm');
    }
}
