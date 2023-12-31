<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\GetUserByIdRequest;

/**
 * @OA\Get(
 *     path="/users/{userId}",
 *     tags={"User"},
 *     summary="get a user by given id",
 *     @OA\Parameter(
 *               name="userId",
 *               in="path",
 *               required=true,
 *               @OA\Schema (
 *                   type="string"
 *               )
 *         ),
 *     @OA\Response(response="200", description="Get user by given id.")
 * )
 */
class GetUserByIdController extends UserController {
    public function __invoke(string $userId) {
        return $this->getUserById($userId);
    }
}
