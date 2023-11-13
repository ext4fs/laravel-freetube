<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\DeleteUserByIdRequest;

/**
 * @OA\Delete(
 *     path="/users/{userId}",
 *     tags={"User"},
 *     summary="delete a user by given id",
 *     @OA\Parameter(
 *               name="userId",
 *               in="path",
 *               required=true,
 *               @OA\Schema (
 *                   type="string"
 *               )
 *         ),
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="Delete user by given id.")
 * )
 */
class DeleteUserByIdController extends UserController {
    public function __invoke(string $userId, DeleteUserByIdRequest $request) {
        return $this->deleteUserById($userId, $request);
    }
}
