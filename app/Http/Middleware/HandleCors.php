<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleCors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request)
         ->header('Access-Controller-Allow-Origin','*')
         ->header('Access-Controller-Allow-Methods','Get,POST,PUT,DELETE,OPTIONS')
         ->header('Access-Controller-Allow-Headers','Content-Type,Authorisation');
    }
}
