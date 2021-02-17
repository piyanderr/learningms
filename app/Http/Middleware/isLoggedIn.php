<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('LoggedUser') && (url('login') == $request->url() || url('register') == $request->url() ) )
        {
            return back();
            //if the user is successfully logged in and tries to go back to log in page or register page
            // this will return the user back to its users logged in profile
        }
        return $next($request);
    
    }
}
