<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Jika belum login
        if (!$user) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek apakah role user termasuk yang diizinkan
        if (!in_array($user->roleuser->nama_role, $roles)) {
            return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses.');
        }

        return $next($request);
    }
}
