<?php

namespace App\Http\Middleware;

use Closure;

class CheckAmount
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

  if($request->input('update') <= 100){

    echo "This is too small ";

  }

        return $next($request);
    }
}


