<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyAuthenticatedUser
{

    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::guest()){
            return redirect('/');
        }

        return $next($request);
    }
}
