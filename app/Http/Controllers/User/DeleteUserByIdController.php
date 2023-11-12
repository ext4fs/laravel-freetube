<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\DeleteUserByIdRequest;

/**
 * @OA\Delete(
 *     path="/users/{userId}",
 *     tags={"User"},
 *     summary="delete a user by given id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="Delete user by given id.")
 * )
 */
class DeleteUserByIdController extends UserController {
    public function __invoke(int $userId, DeleteUserByIdRequest $request) {
        return $this->deleteUserById($userId, $request);
    }
}
