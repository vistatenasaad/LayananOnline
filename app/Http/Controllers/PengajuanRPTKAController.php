<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use Session;
use PDF;
use App\pengajuan_rptka;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPengajuan_rptka;
use App\Mail\MailPengajuan_rptka_admin;
use App\Tracking;

class PengajuanRPTKAController extends Controller
{
    public function PengajuanRPTKA(){
		return view('Form.PengajuanRPTKA');
	}
	public function sukses(){
		Session::flash('sukses','File Has been uploaded successfully');
	}
	public function upload(Request $request){

			$pengajuan_rptka = new pengajuan_rptka();
			$pengajuan_rptka->id = 'BATU' . Str::random(7);
			$pengajuan_rptka->nama_lembaga = $request->nama_lembaga;
			$pengajuan_rptka->email = $request->email;
			$pengajuan_rptka->whatsapp = $request->whatsapp;
	
			$file_akta = 'file_akta' . Str::random(10) . '.' . $request->file_akta->getClientOriginalExtension();
			$request->file_akta->move(public_path('pengajuan_rptka'), $file_akta);
			$pengajuan_rptka->file_akta = 'pengajuan_rptka/' . $file_akta;
	
			$file_statistik = 'file_statistik' . Str::random(10) . '.' . $request->file_statistik->getClientOriginalExtension();
			$request->file_statistik->move(public_path('pengajuan_rptka'), $file_statistik);
			$pengajuan_rptka->file_statistik = 'pengajuan_rptka/' . $file_statistik;
	
			$file_legalitas = 'file_legalitas' . Str::random(10) . '.' . $request->file_legalitas->getClientOriginalExtension();
			$request->file_legalitas->move(public_path('pengajuan_rptka'), $file_legalitas);
			$pengajuan_rptka->file_legalitas = 'pengajuan_rptka/' . $file_legalitas;
	
			$file_orsing_pendamping = 'file_orsing_pendamping' . Str::random(10) . '.' . $request->file_orsing_pendamping->getClientOriginalExtension();
			$request->file_orsing_pendamping->move(public_path('pengajuan_rptka'), $file_orsing_pendamping);
			$pengajuan_rptka->file_orsing_pendamping = 'pengajuan_rptka/' . $file_orsing_pendamping;
	
			$file_surat_pendamping = 'file_surat_pendamping' . Str::random(10) . '.' . $request->file_surat_pendamping->getClientOriginalExtension();
			$request->file_surat_pendamping->move(public_path('pengajuan_rptka'), $file_surat_pendamping);
			$pengajuan_rptka->file_surat_pendamping = 'pengajuan_rptka/' . $file_surat_pendamping;
	
			$details = [
				'id' => $pengajuan_rptka->id,
				'nama_lembaga' => $request->nama_lembaga,
				'email' => $request->email
			];
	
			//captcha
			request()->validate([
				'g-recaptcha-response' => 'required|captcha',
			]);

			Mail::to($request->email)->send(new MailPengajuan_rptka($details));
			Mail::to("ratnaindah0124@gmail.com")->send(new MailPengajuan_rptka_admin($details));

			Tracking::create([
				'kode' => $pengajuan_rptka->id,
				'status' => '1',
				'layanan' => 'pengajuan_rptka'
			]);

			if($pengajuan_rptka->save()){
				return view('Form.PengajuanRPTKA_sm', ['details' => $pengajuan_rptka->id])->with('sukses', 'File Has been uploaded successfully');
			}
		}
		public function cetak_pdf($id){

			$pengajuan_rptka = pengajuan_rptka::find($id);
	
			$pdf = PDF::loadview('Form.PengajuanRPTKA_pdf',['pengajuan_rptka'=>$pengajuan_rptka]);
			 return $pdf->download('Pengajuan-RPTKA.pdf');
			 return view('Form.PengajuanRPTKA_sm');
		}
}
