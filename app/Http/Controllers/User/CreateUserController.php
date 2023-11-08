<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserController;
use App\Http\Requests\User\CreateUserRequest;

/**
 * @OA\Post(
 *     path="/users",
 *     tags={"User"},
 *     @OA\Response(response="200", description="Success")
 * )
 */
class CreateUserController extends UserController {
    public function __invoke(CreateUserRequest $request) {
        return $this->createUser($request);
    }
}
