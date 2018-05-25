<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // / ! \ essai non terminé / ! \
    /*public function handle($request, Closure $next)
    {
        if (Auth::user() &&  Auth::user()->roles == 2) {

            return $next($request);
        }
        return redirect('/')
    }*/
}
