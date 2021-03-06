<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use Session;
use PDF;
use App\pengajuan_kitab;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPengajuan_kitab;
use App\Mail\MailPengajuan_kitab_admin;
use App\Tracking;

class PengajuanKITABController extends Controller
{
    public function PengajuanKITAB(){
		return view('Form.PengajuanKITAP');
	}
	public function sukses(){
		Session::flash('sukses','File Has been uploaded successfully');
	}
	public function upload(Request $request){

		$pengajuan_kitab = new pengajuan_kitab();
		$pengajuan_kitab->id = 'BATU' . Str::random(7);
		$pengajuan_kitab->nama_lembaga = $request->nama_lembaga;
		$pengajuan_kitab->email = $request->email;
		$pengajuan_kitab->whatsapp = $request->whatsapp;

		$file_legalitas = 'file_legalitas' . Str::random(10) . '.' . $request->file_legalitas->getClientOriginalExtension();
		$request->file_legalitas->move(public_path('pengajuan_kitab'), $file_legalitas);
		$pengajuan_kitab->file_legalitas = 'pengajuan_kitab/' . $file_legalitas;

		$file_drh = 'file_drh' . Str::random(10) . '.' . $request->file_drh->getClientOriginalExtension();
		$request->file_drh->move(public_path('pengajuan_kitab'), $file_drh);
		$pengajuan_kitab->file_drh = 'pengajuan_kitab/' . $file_drh;

		$file_ijazah = 'file_ijazah' . Str::random(10) . '.' . $request->file_ijazah->getClientOriginalExtension();
		$request->file_ijazah->move(public_path('pengajuan_kitab'), $file_ijazah);
		$pengajuan_kitab->file_ijazah = 'pengajuan_kitab/' . $file_ijazah;

		$file_rptka_imta = 'file_rptka_imta' . Str::random(10) . '.' . $request->file_rptka_imta->getClientOriginalExtension();
		$request->file_rptka_imta->move(public_path('pengajuan_kitab'), $file_rptka_imta);
		$pengajuan_kitab->file_rptka_imta = 'pengajuan_kitab/' . $file_rptka_imta;

		$file_statistik = 'file_statistik' . Str::random(10) . '.' . $request->file_statistik->getClientOriginalExtension();
		$request->file_statistik->move(public_path('pengajuan_kitab'), $file_statistik);
		$pengajuan_kitab->file_statistik = 'pengajuan_kitab/' . $file_statistik;

		$file_paspor_kitas = 'file_paspor_kitas' . Str::random(10) . '.' . $request->file_paspor_kitas->getClientOriginalExtension();
		$request->file_paspor_kitas->move(public_path('pengajuan_kitab'), $file_paspor_kitas);
		$pengajuan_kitab->file_paspor_kitas = 'pengajuan_kitab/' . $file_paspor_kitas;

		$file_polis_asuransi = 'file_polis_asuransi' . Str::random(10) . '.' . $request->file_polis_asuransi->getClientOriginalExtension();
		$request->file_polis_asuransi->move(public_path('pengajuan_kitab'), $file_polis_asuransi);
		$pengajuan_kitab->file_polis_asuransi = 'pengajuan_kitab/' . $file_polis_asuransi;

		$file_foto = 'file_foto' . Str::random(10) . '.' . $request->file_foto->getClientOriginalExtension();
		$request->file_foto->move(public_path('pengajuan_kitab'), $file_foto);
		$pengajuan_kitab->file_foto = 'pengajuan_kitab/' . $file_foto;

		$file_skkb_skck = 'file_skkb_skck' . Str::random(10) . '.' . $request->file_skkb_skck->getClientOriginalExtension();
		$request->file_skkb_skck->move(public_path('pengajuan_kitab'), $file_skkb_skck);
		$pengajuan_kitab->file_skkb_skck = 'pengajuan_kitab/' . $file_skkb_skck;

		$file_persetujuan_sebelumnya = 'file_persetujuan_sebelumnya' . Str::random(10) . '.' . $request->file_persetujuan_sebelumnya->getClientOriginalExtension();
		$request->file_persetujuan_sebelumnya->move(public_path('pengajuan_kitab'), $file_persetujuan_sebelumnya);
		$pengajuan_kitab->file_persetujuan_sebelumnya = 'pengajuan_kitab/' . $file_persetujuan_sebelumnya;

		$details = [
			'id' => $pengajuan_kitab->id,
            'nama_lembaga' => $request->nama_lembaga,
			'email' => $request->email
        ];
		//captcha
		request()->validate([
			'g-recaptcha-response' => 'required|captcha',
		]);
        Mail::to($request->email)->send(new MailPengajuan_kitab($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailPengajuan_kitab_admin($details));

		Tracking::create([
			'kode' => $pengajuan_kitab->id,
			'status' => '1',
			'layanan' => 'pengajuan_kitab'
		]);

		if($pengajuan_kitab->save()){
			return view('Form.PengajuanKITAB_sm', ['details' => $pengajuan_kitab->id])->with('sukses', 'File Has been uploaded successfully');
		}
	}
	public function cetak_pdf($id){

    	$pengajuan_kitab = pengajuan_kitab::find($id);

    	$pdf = PDF::loadview('Form.PengajuanKITAB_pdf',['pengajuan_kitab'=>$pengajuan_kitab]);
    	 return $pdf->download('Pengajuan-KITAB.pdf');
		 return view('Form.PengajuanKITAB_sm');
    }
}
