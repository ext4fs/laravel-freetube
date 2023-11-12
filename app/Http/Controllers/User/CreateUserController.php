<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\CreateUserRequest;

/**
 * @OA\Post(
 *     path="/users",
 *     tags={"User"},
 *     summary="create a user",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success")
 * )
 */
class CreateUserController extends UserController {
    public function __invoke(CreateUserRequest $request) {
        return $this->createUser($request);
    }
}
