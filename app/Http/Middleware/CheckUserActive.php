<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserActive
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {

            $user = auth()->user();

            // 👑 Admin sempre passa
            if ($user->is_admin) {
                return $next($request);
            }

            // 👤 Usuário comum precisa estar ativo
            if ($user->status !== 'active') {
                return redirect()->route('pending');
            }
        }

        return $next($request);
    }
}
