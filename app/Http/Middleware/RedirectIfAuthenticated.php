<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      if ($guard=="web" && Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        if ($guard=="secretary" && Auth::guard($guard)->check()) {
            return redirect('/secretary');
        }
        
        if ($guard=="doctor" && Auth::guard($guard)->check()) {
            return redirect('/doctor');
        }
        
        if ($guard=="system_employee" && Auth::guard($guard)->check()) {
            return redirect('/system_employee');
        }
        
        return $next($request);
    }
}
