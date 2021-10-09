<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('loggedUser') && ($request->path() != 'auth/login' && $request->path() != 'auth/register')) {
            return redirect(route('auth.login'))->with('fail', 'Вы должны быть зарегистрированы');
        }

        if (session()->has('loggedUser') && ($request->path() == 'auth/login' || $request->path() == 'auth/register')) {
            return back();
        }

        $response = $next($request);
        $headers = [
            'Cache-Control' => 'nocache, no-store, max-age=0, must-revalidate',
            'Pragma', 'no-cache',
            'Expires', 'Fri, 01 Jan 1990 00:00:00 GMT',
        ];

        foreach ($headers as $key => $value) {
            $response->headers->set($key, $value);
        }

        return $response;
    }
}
