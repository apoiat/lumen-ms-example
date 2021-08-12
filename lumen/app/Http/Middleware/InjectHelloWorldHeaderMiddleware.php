<?php

namespace App\Http\Middleware;

use Closure;

class InjectHelloWorldHeaderMiddleware
{
    /**
     * Inject an x-hello-world header with my initials and forward
     * the request
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->header('x-hello-world', 'A. I.');

        return $response;
    }
}
