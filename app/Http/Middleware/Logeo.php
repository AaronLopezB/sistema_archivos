<?php

namespace App\Http\Middleware;

use Closure;

class Logeo
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
        if (!$request->session()->get('activo')) {
            return redirect()->route('login');
        }
        //
        // dd('hola');
        return $next($request);
    }
}
