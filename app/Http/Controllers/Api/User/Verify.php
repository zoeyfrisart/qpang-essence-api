<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Requests\Api\AuthenticationRequest;
use App\Models\User;
use Illuminate\Hashing\HashManager;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Arr;

class Verify
{
    /**
     * @var \Illuminate\Routing\ResponseFactory
     */
    private $responseFactory;

    /**
     * @var \Illuminate\Hashing\HashManager
     */
    private $hashManager;

    /**
     * Verify constructor.
     *
     * @param \Illuminate\Routing\ResponseFactory $responseFactory
     * @param \Illuminate\Hashing\HashManager     $hashManager
     */
    public function __construct(ResponseFactory $responseFactory, HashManager $hashManager)
    {
        $this->responseFactory = $responseFactory;
        $this->hashManager = $hashManager;
    }

    /**
     * @param \App\Http\Requests\Api\AuthenticationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(AuthenticationRequest $request)
    {
        $validated = $request->validated();

        /** @var User|null $user */
        $user = User::query()->where('name', '=', Arr::get($validated, 'name', null))->first();

        if ($user !== null) {
            $success = $this->hashManager->check(Arr::get($validated, 'password', null), $user->password);

            if ($success) {
                return $this->responseFactory->make($user->getKey(), 200);
            }
        }

        return $this->responseFactory->noContent(401);
    }
}
