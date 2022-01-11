<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\rekom_umroh;
use Str;

class RekomUmrohController extends Controller
{
    public function RekomUmroh(){
		return view('Form.rekomUmroh');
	}

	public function upload(Request $request){

		$rekom_umroh = new rekom_umroh();
		$rekom_umroh->nama = $request->nama;
		$rekom_umroh->email = $request->email;
		$rekom_umroh->whatsapp = $request->whatsapp;

		$file_ktp = 'file_ktp' . Str::random(10) . '.' . $request->file_ktp->getClientOriginalExtension();
		$request->file_ktp->move(public_path('rekom_umroh'), $file_ktp);
		$rekom_umroh->file_ktp = 'rekom_umroh/' . $file_ktp;

		$file_ppiu = 'file_ppiu' . Str::random(10) . '.' . $request->file_ppiu->getClientOriginalExtension();
		$request->file_ppiu->move(public_path('rekom_umroh'), $file_ppiu);
		$rekom_umroh->file_ppiu = 'rekom_umroh/' . $file_ppiu;

		if($rekom_umroh->save()){
			return redirect('RekomUmroh')->with('status', 'File Has been uploaded successfully');
		}
	}
}
