<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser3
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
        echo 'this is middleware CheckUser3';
        return $next($request);
    }
}
