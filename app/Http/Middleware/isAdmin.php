<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah pengguna sudah login
        if (!auth()->check()) {
            return abort(404); // Atau Anda bisa mengarahkannya ke halaman login
        }

        // Memeriksa apakah pengguna memiliki level yang sesuai dengan admin
        if (auth()->user()->level == 1) {
            return $next($request);
        }

        // Jika bukan admin, mungkin Anda ingin memberikan respons yang lebih sesuai
        return abort(403, 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
