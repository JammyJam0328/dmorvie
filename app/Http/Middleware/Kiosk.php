<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Kiosk
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role_id !== 4) {
            return redirect()->back();
        }
        return $next($request);
    }
}