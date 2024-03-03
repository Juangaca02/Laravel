<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si el usuario está autenticado y es administrador o no.
        if ($request->user() && $request->user()->is_admin) {
            return $next($request);
        }
        //return redirect()->route('home')->with('error', 'No tienes permisos de administrador.');
        return to_route('home');
    }
}
