<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Requests\Api\RegisterRequest;
use App\Http\Resources\Api\UserResource;
use App\Models\User;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Hashing\HashManager;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use ReCaptcha\ReCaptcha;

class Register
{
    /**
     * @var \Illuminate\Contracts\Routing\ResponseFactory
     */
    private $responseFactory;

    /**
     * @var \Illuminate\Contracts\Config\Repository
     */
    private $repository;

    /**
     * @var \Illuminate\Hashing\HashManager
     */
    private $hashManager;

    /**
     * Register constructor.
     *
     * @param \Illuminate\Contracts\Routing\ResponseFactory $responseFactory
     * @param \Illuminate\Hashing\HashManager               $hashManager
     * @param \Illuminate\Contracts\Config\Repository       $repository
     */
    public function __construct(ResponseFactory $responseFactory, HashManager $hashManager, Repository $repository)
    {
        $this->responseFactory = $responseFactory;
        $this->repository = $repository;
        $this->hashManager = $hashManager;
    }

    public function __invoke(RegisterRequest $request)
    {
        $validated = $request->validated();

        $recaptchaResponse = Arr::get($validated, 'recaptcha', '');
        $recaptchaSecretKey = $this->repository->get('google.recaptcha_secret_key');
        $recaptcha = new ReCaptcha($recaptchaSecretKey);

        $response = $recaptcha->verify($recaptchaResponse, $request->ip());

        if (! $response->isSuccess()) {
            return $this->responseFactory->noContent(Response::HTTP_UNAUTHORIZED);
        }

        Arr::set($validated, 'password', $this->hashManager->make(Arr::get($validated, 'password')));
        $user = User::query()->create($validated);

        return new UserResource($user);
    }
}
