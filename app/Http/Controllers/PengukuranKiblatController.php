<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengukuran_kiblat;
use Illuminate\Support\Str;
use File;
use DB;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Mail\MailNotify_admin;
use App\Tracking;
use PDF;

class PengukuranKiblatController extends Controller
{
    public function PengukuranKiblat(){
		return view('Form.PengukuranKiblat');
	}

	public function sukses(){
		Session::flash('sukses','File Has been uploaded successfully');
	}

	public function upload(Request $request){
		$pengukuran_kiblat = new pengukuran_kiblat();
		$pengukuran_kiblat->id = 'BATU' . Str::random(7);
		$pengukuran_kiblat->nama = $request->nama;
		$pengukuran_kiblat->nama_masjid = $request->nama_masjid;
		$pengukuran_kiblat->email = $request->email;
		$pengukuran_kiblat->whatsapp = $request->whatsapp;

		$file_permohonan = 'file_permohonan' . Str::random(10) . '.' . $request->file_permohonan->getClientOriginalExtension();
		$request->file_permohonan->move(public_path('pengukuran_kiblat'), $file_permohonan);
		$pengukuran_kiblat->file_permohonan = 'pengukuran_kiblat/' . $file_permohonan;

		$file_lokasi = 'file_lokasi' . Str::random(10) . '.' . $request->file_lokasi->getClientOriginalExtension();
		$request->file_lokasi->move(public_path('pengukuran_kiblat'), $file_lokasi);
		$pengukuran_kiblat->file_lokasi = 'pengukuran_kiblat/' . $file_lokasi;	

		$details = [
			'id' => $pengukuran_kiblat->id,
            'nama' => $request->nama,
			'nama_masjid' => $request->nama_masjid,
			'email' => $request->email
        ];
		
		// request()->validate([
		// 	'g-recaptcha-response' => 'required|captcha',
		// ]);
		//notif email
        // Mail::to($request->email)->send(new MailNotify($details));
		// Mail::to("ratnaindah0124@gmail.com")->send(new MailNotify_admin($details));
		// Mail::to("irmarista16@gmail.com")->send(new MailNotify_admin($details));

		Tracking::create([
			'kode' => $pengukuran_kiblat->id,
			'status' => '1',
			'layanan' => 'pengukuran_kiblat'
		]);

		if($pengukuran_kiblat->save()){
			return view('Form.PengukuranKiblat_sm', ['details' => $pengukuran_kiblat->id])->with('sukses', 'File Has been uploaded successfully');
		}
	}

	//pdf
	public function cetak_pdf($id){

    	$pengukuran_kiblat = pengukuran_kiblat::find($id);

    	$pdf = PDF::loadview('Form.PengukuranKiblat_pdf',['pengukuran_kiblat'=>$pengukuran_kiblat]);
    	 return $pdf->download('PengukuranKiblat.pdf');
		 return view('Form.PengukuranKiblat_sm');
    }
}
