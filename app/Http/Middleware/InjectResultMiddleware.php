<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InjectResultMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        $response = $next($request);
        if ($response->isSuccessful()) {
            return response()->json(['success' => true, 'data' => json_decode($response->getContent())]);
        }
        return response()->json(['success' => false]);
    }
}
