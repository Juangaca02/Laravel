<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RangeMore11
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
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

        // Si el usuario es admin, continua sin comprobar rango, si no es asi, comprueba el rango
        if ($user->rol_id == 2) {
            return $next($request);
        } else {
            // Comprueba si el rango del usuario es menor a 11
            if ($user->range_id < 11) {
                // Si el rango es mayor a 11, redirige o devuelve un error
                return redirect()->route('home')->withErrors('No tienes el rango suficiente para acceder a esta página.');
            }
            return $next($request);
        }
    }
}
