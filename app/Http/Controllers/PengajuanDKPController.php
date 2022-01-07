<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanDKPController extends Controller
{
    public function PengajuanDKP(){
		return view('Form.PengajuanDKP');
	}
 
	public function PengajuanDKP_proses(Request $request){
        
	}
}
