<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /*public function handle($request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role != $role) {
            return response('Unauthorized.', 401);
        }
    
        return $next($request);
    }*/
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check() && in_array(Auth::user()->role, $roles)) {
            return $next($request);
        }

        return redirect("/notfound")->with('error', 'You do not have permission to access that page.');
    }
}
