<?php

namespace App\Http\Controllers\User;

/**
 * @OA\Delete(
 *     path="/users",
 *     tags={"User"},
 *     summary="delete all users",
 *     @OA\Response(response="200", description="Delete all users.")
 * )
 */
class DeleteUsersController extends UserController {
    public function __invoke() {
        return $this->deleteUsers();
    }
}
