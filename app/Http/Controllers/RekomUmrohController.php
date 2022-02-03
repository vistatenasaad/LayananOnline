<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\rekom_umroh;
use Str;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRekom_umroh;
use App\Mail\MailRekom_umroh_admin;
use PDF;

class RekomUmrohController extends Controller
{
    public function RekomUmroh(){
		return view('Form.rekomUmroh');
	}

	public function sukses(){
		Session::flash('sukses','File Has been uploaded successfully');
	}

	public function upload(Request $request){

		$rekom_umroh = new rekom_umroh();
		$rekom_umroh->id = 'BATU' . Str::random(7);
		$rekom_umroh->nama = $request->nama;
		$rekom_umroh->email = $request->email;
		$rekom_umroh->whatsapp = $request->whatsapp;

		$file_ktp = 'file_ktp' . Str::random(10) . '.' . $request->file_ktp->getClientOriginalExtension();
		$request->file_ktp->move(public_path('rekom_umroh'), $file_ktp);
		$rekom_umroh->file_ktp = 'rekom_umroh/' . $file_ktp;

		$file_ppiu = 'file_ppiu' . Str::random(10) . '.' . $request->file_ppiu->getClientOriginalExtension();
		$request->file_ppiu->move(public_path('rekom_umroh'), $file_ppiu);
		$rekom_umroh->file_ppiu = 'rekom_umroh/' . $file_ppiu;

		$details = [
			'id' => $rekom_umroh->id,
            'nama' => $request->nama,
			'email' => $request->email
        ];

		//captcha
		request()->validate([
			'g-recaptcha-response' => 'required|captcha',
		]);
		
        Mail::to($request->email)->send(new MailRekom_umroh($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailRekom_umroh_admin($details));

		Tracking::create([
			'kode' => $rekom_umroh->id,
			'status' => '1',
			'layanan' => 'rekom_umroh'
		]);

		if($rekom_umroh->save()){
			//return baru
			return view('Form.rekomUmroh_sm', ['details' => $rekom_umroh->id])->with('sukses', 'File Has been uploaded successfully');
		}
	}
	//pdf
	public function cetak_pdf($id){

    	$rekom_umroh = rekom_umroh::find($id);

    	$pdf = PDF::loadview('Form.rekomUmroh_pdf',['rekom_umroh'=>$rekom_umroh]);
    	 return $pdf->download('Rekom-Umroh.pdf');
		 return view('Form.rekomUmroh_sm');
    }
}
