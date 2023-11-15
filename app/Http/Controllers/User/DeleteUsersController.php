<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\DeleteUsersRequest;

/**
 * @OA\Delete(
 *     path="/users",
 *     tags={"User"},
 *     summary="delete all users",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="Delete all users.")
 * )
 */
class DeleteUsersController extends UserController {
    public function __invoke() {
        return $this->deleteUsers();
    }
}
