<?php

namespace App\Http\Controllers\User;

/**
 * @OA\Get(
 *     path="/users/{userId}",
 *     tags={"User"},
 *     summary="Get user by given id",
 *     @OA\Response(response="200", description="Get user by given id.")
 * )
 */
class GetUserByIdController extends UserController {
    public function __invoke(string $userId) {
        return $this->getUserById($userId);
    }
}
