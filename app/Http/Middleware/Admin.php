<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $picture = 'pic.jpg';
        $request->merge(compact('picture'));
        if (1 != 1) {
            return redirect()->guest('/');

        }
        return $next($request);
    }
}
