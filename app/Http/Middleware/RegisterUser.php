<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class RegisterUser
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
        if(Auth::user()->accesslevel == '7'){
        return $next($request);
        } else {
        return redirect('logout');    
        }
    }
}
