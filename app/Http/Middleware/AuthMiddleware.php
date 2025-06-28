<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
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
        // Check if user is logged in
        if (!session()->has('logged_in') || !session('logged_in')) {
            return redirect('/')->with('error', 'Silahkan login terlebih dahulu!');
        }

        return $next($request);
    }
}
