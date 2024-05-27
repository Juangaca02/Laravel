<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class VerifyUser
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

        // Comprueba si el usuario está verificado (verified = 1)
        if ($user->verified == 0) {
            // Si el usuario no está verificado, redirige o devuelve un error
            return redirect()->route('home')->withErrors('Debes verificar tu cuenta para acceder a esta página.');
        }

        // Si el usuario está verificado, continúa con la solicitud
        return $next($request);
    }
}
