<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('visited')) {

        \App\Models\Visitor::create([
            'ip' => $request->ip(),
            'url' => $request->path(),
            'user_agent' => $request->userAgent(),
        ]);

        session(['visited' => true]);
    }

        return $next($request);
    }
}
