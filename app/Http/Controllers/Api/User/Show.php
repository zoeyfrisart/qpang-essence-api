<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Resources\Api\UserResource;
use Illuminate\Http\Request;

class Show
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\Api\UserResource
     */
    public function __invoke(Request $request)
    {
        return new UserResource($request->user());
    }
}
