<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomHajiController extends Controller
{
    public function RekomHaji(){
		return view('Form.RekomHaji');
	}
}
