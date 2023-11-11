<?php

namespace App\Http\Controllers\User;

/**
 * @OA\Get(
 *     path="/users",
 *     tags={"User"},
 *     summary="Get all users",
 *     @OA\Response(response="200", description="list of all users")
 * )
 *
 */
class GetUsersController extends UserController {
    public function __invoke() {
        return $this->getUsers();
    }
}
