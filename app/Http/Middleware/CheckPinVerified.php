<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPinVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah session 'pin_verified' ada dan true
        if (!$request->session()->get('pin_verified', false)) {
            // Redirect ke halaman masukkan PIN jika belum diverifikasi
            return redirect()->back()->with('show_pin_modal', true);
        }

        // Lanjutkan ke request berikutnya jika PIN sudah diverifikasi
        return $next($request);
    }
}
