<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracking;

class PermohonanPajakController extends Controller
{
    public function PermohonanPajak(){
		return view('Form.PermohonanPajak');
	}
}
