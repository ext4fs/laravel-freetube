<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\UpdateUserByIdRequest;

/**
 * @OA\Put(
 *     path="/users/{userId}",
 *     tags={"User"},
 *     summary="update a user by given id",
 *     @OA\Response(response="200", description="Success")
 * )
 */
class UpdateUserByIdController extends UserController {
    public function __invoke(int $userId, UpdateUserByIdRequest $request) {
        return $this->updateUserById($userId, $request);
    }
}
