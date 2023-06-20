<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Kalau belum login, maka harus login terlebih dahulu
        if (!$request->session()->has('loginId')) {
            return redirect()->intended('/login')->with('Error', 'You must login to continue');
        }
        return $next($request);
    }
}