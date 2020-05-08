<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CustomerMiddleware
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
        $userProfile = Auth::user()->entity_type;

        if($userProfile == 'Customer'){
            return $next($request);
        }else{
            return view('bartender.bartenderreview');
        }
        //dd(Auth::user()->entity_type, 'customer middleware', $request);
    }
}
