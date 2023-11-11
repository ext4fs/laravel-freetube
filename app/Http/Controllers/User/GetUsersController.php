<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\GetUsersRequest;

/**
 * @OA\Get(
 *     path="/users",
 *     tags={"User"},
 *     summary="get all users",
 *     @OA\Response(response="200", description="list of all users")
 * )
 *
 */
class GetUsersController extends UserController {
    public function __invoke(GetUsersRequest $request) {
        return $this->getUsers($request);
    }
}
