<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracking;

class PermohonanSlipGajiController extends Controller
{
    public function PermohonanSlipGaji(){
		return view('Form.PermohonanSlipGaji');
	}
}
