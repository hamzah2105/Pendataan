<?php

namespace App\Http\Middleware;

use Closure;

class RequireLogin
{
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna sudah login
        if (auth()->check()) {
            return $next($request); // Lanjutkan ke route yang diminta
        }

        // Jika belum login, cek apakah ada session 'berhasil_login'
        if (session('berhasil_login')) {
            return $next($request); // Lanjutkan ke route yang diminta
        }

        // Jika belum login dan tidak ada session 'berhasil_login', redirect ke halaman login
        return redirect('/login');
    }
}
