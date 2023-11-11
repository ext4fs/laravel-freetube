<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\GetMeRequest;

/**
 * @OA\Get(
 *     path="/users/me",
 *     tags={"User"},
 *     summary="get current authorized user",
 *     @OA\Response(
 *         response="200",
 *         description="sucess",
 *     )
 * )
 */
class GetMeController extends UserController {
    public function __invoke(GetMeRequest $request) {
        return $this->getMe($request);
    }
}
