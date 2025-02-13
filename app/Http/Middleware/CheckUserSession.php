<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserSession
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user')) {
            return redirect()->route('login'); 
        }

        // Pastikan `auth()` juga mengenali user
        Auth::setUser(session('user'));
        return $next($request);
    }
}
