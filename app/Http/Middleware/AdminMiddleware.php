<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        // Check if user is logged in and has admin role
        if (!session()->has('logged_in') || !session('logged_in') || session('role_name') != 'admin') {
            if (session()->has('logged_in') && session('logged_in')) {
                // User is logged in but not admin, redirect to form
                return redirect()->route('formalumni')->with('error', 'Anda tidak memiliki akses ke halaman ini!');
            }

            // User is not logged in
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu!');
        }

        return $next($request);
    }
}
