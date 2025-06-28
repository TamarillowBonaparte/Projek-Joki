<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika user bukan admin (role != 1), lanjutkan request
        if (session('id_role') != 1) {
            return $next($request);
        }

        // Jika user adalah admin, redirect ke dashboard admin
        return redirect()->route('dashboard')->with('error', 'Admin tidak perlu mengisi form alumni');
    }
}
