<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\DeleteUsersRequest;

/**
 * @OA\Delete(
 *     path="/users",
 *     tags={"User"},
 *     summary="delete all users",
 *     @OA\Response(response="200", description="Delete all users.")
 * )
 */
class DeleteUsersController extends UserController {
    public function __invoke(DeleteUsersRequest $request) {
        return $this->deleteUsers($request);
    }
}
