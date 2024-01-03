<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Use the Auth facade to access the authenticated user
        $user = Auth::user();

        if ($user && $user->type != 'ADMIN') {
            return redirect()->route('user');
        }

        if ($user && $user->type == 'ADMIN') {
            return redirect()->route('admin');
        }

        return $next($request);
    }
}
