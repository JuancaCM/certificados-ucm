<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Analista
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
        if (!$request->session()->has('id')) {
            $request->session()->flush();
            return redirect()->to('/login')->with('message', 'Sesión no iniciada')->with('color', 'bg-danger');
        }

        if (!$request->session()->get('role_name') === 'Analista') {
            $request->session()->flush();
            return redirect()->to('/login')->with('message', 'Usuario no autorizado')->with('color', 'bg-danger');
        }

        return $next($request);
    }
}
