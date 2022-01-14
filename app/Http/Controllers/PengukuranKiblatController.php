<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengukuran_kiblat;
use Str;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class PengukuranKiblatController extends Controller
{
    public function PengukuranKiblat(){
		return view('Form.PengukuranKiblat');
	}

	public function upload(Request $request){
		$pengukuran_kiblat = new pengukuran_kiblat();
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
            'nama' => $request->nama,
			'nama_masjid' => $request->nama_masjid
        ];

        Mail::to($request->email)->send(new MailNotify($details));

		if($pengukuran_kiblat->save()){
			return redirect('PengukuranKiblat')->with('status', 'File Has been uploaded successfully');
		}
	}
}
