<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;
class Seller
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
        if(!Auth::check() || Auth::user()->usertype != 2){
              return redirect('/login');
        }
        return $next($request);
    }
}
