<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class BartenderMiddleware
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
        /*$userProfile = Auth::user()->entity_type;

        if($userProfile == 'Bartender'){
            return $next($request);
        }else{
            return view('customer.barlocator');
        }*/
        dd(Auth::user()->entity_type, 'bartender middleware', $request);
    }
}
