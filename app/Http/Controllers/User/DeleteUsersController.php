<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserController;

/**
 * @OA\Delete(
 *     path="/users",
 *     tags={"User"},
 *     @OA\Response(response="200", description="Delete all users.")
 * )
 */
class DeleteUsersController extends UserController {
    public function __invoke() {
        return $this->deleteUsers();
    }
}
