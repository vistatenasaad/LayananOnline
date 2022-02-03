<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;
            switch ($role) {
                case 'admin1':
                    return redirect('/home1');
                    break;
                case 'admin2':
                    return redirect('/home2');
                    break;
                default:
                    // return redirect('/');
                    return redirect(RouteServiceProvider::HOME);
                    break;
            }
            // return redirect(RouteServiceProvider::HOME);
        // } else {
        //     return back();
        }

        return $next($request);
    }
}
