<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RangeMore16
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si el usuario está autenticado
        if (!Auth::check()) {
            // Si no está autenticado, redirige a la página de login o devuelve un error
            return redirect()->route('login')->withErrors('Debes iniciar sesión para acceder a esta página.');
        }

        // Obtén el usuario autenticado
        $user = Auth::user();

        // Comprueba si el rango del usuario es mayor o igual a 16
        if ($user->range_id <= 16) {
            // Si el rango es menor a 16, redirige o devuelve un error
            return redirect()->route('home')->withErrors('No tienes el rango suficiente para acceder a esta página.');
        }

        // Si pasa ambas verificaciones, continúa con la solicitud
        return $next($request);
    }
}
