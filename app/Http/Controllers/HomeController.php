<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracking;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jml1 = User::all()->count();
        $jml2 = User::where('role', '=', 'admin1')->count();
        $jml3 = User::where('role', '=', 'admin2')->count();
        $user = User::all()->where('role', '!=', 'superadmin');
        return view(
            'superadminhome',
            [
                'jml1' => $jml1,
                'jml2' => $jml2,
                'jml3' => $jml3,
                'user' => $user
            ]
        );
    }

    public function home1()
    {
        $jml1 = Tracking::all()->count();
        $jml2 = Tracking::where('status', '=', '1')->count();
        $jml3 = Tracking::where('status', '=', '2')->count();
        $jml4 = Tracking::where('status', '=', '11')->count();
        return view(
            'admin1home',
            [
                'jml1' => $jml1,
                'jml2' => $jml2,
                'jml3' => $jml3,
                'jml4' => $jml4,
            ]
        );
    }

    public function home2()
    {
        $jml1 = Tracking::all()->count();
        $jml2 = Tracking::where('status', '=', '2')->count();
        $jml3 = Tracking::where('status', '=', '3')->count();
        $jml4 = Tracking::where('status', '=', '12')->count();
        return view(
            'admin2home',
            [
                'jml1' => $jml1,
                'jml2' => $jml2,
                'jml3' => $jml3,
                'jml4' => $jml4,
            ]
        );
    }
}
