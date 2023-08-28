<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->role_id == 3) {
            return $next($request);
        }
        abort(403, 'Maaf Halaman Ini hanya boleh Diakses Oleh Super Admin');
    }
}
