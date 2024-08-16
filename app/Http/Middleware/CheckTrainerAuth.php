<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckTrainerAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna terautentikasi sebagai 'trainer'
        if (!Auth::guard('trainer')->check()) {
            // Arahkan ke halaman login trainer jika belum login
            return redirect()->route('login.trainer');
        }

        return $next($request);
    }
}
