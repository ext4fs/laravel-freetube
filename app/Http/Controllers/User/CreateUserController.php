<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserController;
use App\Http\Requests\User\CreateUserRequest;

class CreateUserController extends UserController {
    public function __invoke(CreateUserRequest $request) {
        return $this->createUser($request);
    }
}
