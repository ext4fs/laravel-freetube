<?php

namespace App\Http\Controllers\User;

/**
 * @OA\Delete(
 *     path="/users/{userId}",
 *     tags={"User"},
 *     summary="Delete user by given id",
 *     @OA\Response(response="200", description="Delete user by given id.")
 * )
 */
class DeleteUserByIdController extends UserController {
    public function __invoke(int $userId) {
        return $this->deleteUserById($userId);
    }
}
