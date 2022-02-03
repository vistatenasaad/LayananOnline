<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengukuran_kiblat;
use Illuminate\Support\Str;
use File;
use DB;
use Session;
use Illuminate\Support\Facades\Mail;

class CetakController extends Controller
{
    public function index(){
        return view('cetakkemenag');
    }

    public function cetak(){
        $pengukuran_kiblat = new pengukuran_kiblat();
		$pengukuran_kiblat->id = 'BATU' . Str::random(7);
		$pengukuran_kiblat->nama;
		$pengukuran_kiblat->nama_masjid;
		$pengukuran_kiblat->email;
		$pengukuran_kiblat->whatsapp;

			$details = [
			'id' => $pengukuran_kiblat->id,
            'nama' => $pengukuran_kiblat->nama,
			'nama_masjid' => $pengukuran_kiblat->nama_masjid,
			'email' => $pengukuran_kiblat->email
        ];
		return view('cetakkemenag', ['details' => $details]);
	}
}
