<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserController;
use App\Http\Requests\User\UpdateUserRequest;

class UpdateUserByIdController extends UserController {
    public function __invoke(int $userId, UpdateUserRequest $request) {
        return $this->updateUserById($userId, $request);
    }
}
