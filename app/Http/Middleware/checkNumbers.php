<?php

namespace App\Http\Middleware;

use Closure;

class checkNumbers
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

        #return redirect('http://pinevalleyinstitute.co.za/');

        return $next($request);
    }
}
