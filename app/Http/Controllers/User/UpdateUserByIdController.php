<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserController;
use App\Http\Requests\User\UpdateUserRequest;

/**
 * @OA\Put(
 *     path="/users/{userId}",
 *     tags={"User"},
 *     description="Update user by given id.",
 *     @OA\Response(response="200", description="Success")
 * )
 */
class UpdateUserByIdController extends UserController {
    public function __invoke(int $userId, UpdateUserRequest $request) {
        return $this->updateUserById($userId, $request);
    }
}
