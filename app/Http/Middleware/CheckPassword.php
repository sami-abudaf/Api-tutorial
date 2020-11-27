<?php

namespace App\Http\Middleware;

use Closure;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( $request->api_password !== env('API_PASSWORD','KsnRKL5EX2ccv7PNr')){
            return response()->json(['message' => 'Unauthenticated.']);
        }
        return $next($request);
    }
}
