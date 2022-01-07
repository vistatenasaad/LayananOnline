<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengukuranKiblatController extends Controller
{
    public function PengukuranKiblat(){
		return view('Form.PengukuranKiblat');
	}
}
