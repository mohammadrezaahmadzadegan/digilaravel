<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser5
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$value)
    {
        echo 'this is middleware CheckUser5 ' ;
        if($request->has('CheckUser6') && $request->CheckUser6 == $value){
            echo 'same';
            return $next($request);
        } else {
            echo 'not same';
            return $next($request);
        }

    }
}
