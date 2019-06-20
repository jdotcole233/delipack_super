<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class superauthentica
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
        $redirect = "";
        if (!Auth::guard('superusers')->check()){    
            return redirect("/");       
         }// else {
        //     return $redirect("/login");
        // }
        //   dd($request);
        return $next($request);
    }
}
