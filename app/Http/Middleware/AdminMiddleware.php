<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403, 'Accès interdit'); // Ou redirigez vers une autre page d'erreur
        }

        return $next($request);
    }
}
