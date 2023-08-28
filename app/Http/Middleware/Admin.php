<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->role_id == 2 || auth()->user()->role_id == 3) {
            return $next($request);
        }
        abort(403, 'Maaf Halaman Ini hanya boleh Diakses Oleh Admin dan Super Admin');
    }
}
