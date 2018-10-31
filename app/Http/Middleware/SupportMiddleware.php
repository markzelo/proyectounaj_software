<?php

namespace App\Http\Middleware;

use Closure;

class SupportMiddleware
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
        if(!auth()->check())
            return redirect("login");

        //si es tecnico continuar
        if (auth()->user()->role != 1)
            return redirect("home");

        return $next($request);
    }
}
