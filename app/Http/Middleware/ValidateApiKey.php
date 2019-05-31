<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Routing\ResponseFactory;

class ValidateApiKey
{

    /**
     * @var ResponseFactory
     */
    protected $responseFactory;

    /**
     * ValidateApiKey constructor.
     *
     * @param \Illuminate\Routing\ResponseFactory $responseFactory
     */
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param int                       $keyLevel
     * @return mixed
     */
    public function handle($request, Closure $next, int $keyLevel)
    {
        /** @var string|null $token */
        $token = $request->header('X-Api-Key');
        if ($token !== null) {
            /** @var ApiKey|null $apiKey */
            $apiKey = ApiKey::query()->where('key', '=', $token)->first();
            if ($apiKey !== null) {
                if ($apiKey->permission >= $keyLevel) {
                    return $next($request);
                }
            }
        }
        return $this->responseFactory->noContent(401);
    }
}
