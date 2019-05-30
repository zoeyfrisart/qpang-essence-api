<?php

namespace App\Http\Middleware;
use Closure;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('X-Api-Key');
        if(\App\Models\Website\ApiKey::where('key', $apiKey)->first())
            return $next($request);
        else
            return response('Key invalid', 401);
    }
}
