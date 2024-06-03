<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();
        
        // Verificar si el usuario está autenticado y su rol es de administrador (rol_id = 2)
        if ($user && $user->rol_id === 2) {
            return $next($request);
        }
        
        // Redireccionar o devolver un error
        return redirect()->route('home')->with('error', 'No tienes permisos de administrador.');
    }
}
