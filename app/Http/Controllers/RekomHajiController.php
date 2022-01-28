<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\rekom_haji;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRekom_haji;
use App\Mail\MailRekom_haji_admin;

class RekomHajiController extends Controller
{
    public function RekomHaji(){
		return view('Form.RekomHaji');
	}

	public function upload(Request $request){

		$rekom_haji = new rekom_haji();
		$rekom_haji->id = 'BATU' . Str::random(7);
		$rekom_haji->nama = $request->nama;
		$rekom_haji->email = $request->email;
		$rekom_haji->whatsapp = $request->whatsapp;

		$file_porsi_haji = 'file_porsi_haji' . Str::random(10) . '.' . $request->file_porsi_haji->getClientOriginalExtension();
		$request->file_porsi_haji->move(public_path('rekom_haji'), $file_porsi_haji);
		$rekom_haji->file_porsi_haji = 'rekom_haji/' . $file_porsi_haji;

		$file_ktp = 'file_ktp' . Str::random(10) . '.' . $request->file_ktp->getClientOriginalExtension();
		$request->file_ktp->move(public_path('rekom_haji'), $file_ktp);
		$rekom_haji->file_ktp = 'rekom_haji/' . $file_ktp;

		$file_kk = 'file_kk' . Str::random(10) . '.' . $request->file_kk->getClientOriginalExtension();
		$request->file_kk->move(public_path('rekom_haji'), $file_kk);
		$rekom_haji->file_kk = 'rekom_haji/' . $file_kk;

		$file_pendukung = 'file_pendukung' . Str::random(10) . '.' . $request->file_pendukung->getClientOriginalExtension();
		$request->file_pendukung->move(public_path('rekom_haji'), $file_pendukung);
		$rekom_haji->file_pendukung = 'rekom_haji/' . $file_pendukung;

		$details = [
			'id' => $rekom_haji->id,
            'nama' => $request->nama,
			'email' => $request->email
        ];

		//captcha
		request()->validate([
			'g-recaptcha-response' => 'required|captcha',
		]);
		
        Mail::to($request->email)->send(new MailRekom_haji($details));
		Mail::to("ratnaindah0124@gmail.com")->send(new MailRekom_haji_admin($details));

		if($rekom_haji->save()){
			return redirect('RekomHaji')->with('status', 'File Has been uploaded successfully');
		}
	}
}
