<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser4
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
        echo 'this is middleware CheckUser4';
        return $next($request);
    }
}
