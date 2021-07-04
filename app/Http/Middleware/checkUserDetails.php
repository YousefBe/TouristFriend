<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkUserDetails
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
        if (is_null(auth()->user()->details)) {
            return redirect()->route('user-details');
        }
        return $next($request);
    }
}
