<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if (Auth::user()->hasPermissionTo('SU')) {
            return $next($request);
        }

        if ($request->is('posts/create')) {
            if (!Auth::user()->hasPermissionTo('US')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->is('hardware/create')) {
            if (!Auth::user()->hasRole('User', 'Admin')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        return $next($request);
    }
}