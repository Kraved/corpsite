<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $roleName
     * @return mixed
     */
    public function handle($request, Closure $next, string $roleName)
    {
        dump(Auth::user(), $roleName);
        dump(Auth::user()->checkRole('admin'));
        if (! Auth::user()->checkRole('admin')) {
            abort_if(! Auth::user()->roles->contains('name', $roleName), 403);
        }
        return $next($request);
    }
}
