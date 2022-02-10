<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Tracking;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $judul = "Change Password";
        $subjudul = "Dashboard";
        return view('changePassword', ['pagetitle' => $judul, 'subtitle' => $subjudul]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        if (auth()->user()->role == 'admin1') {

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
            return view('admin1home');
        } else {
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
}
