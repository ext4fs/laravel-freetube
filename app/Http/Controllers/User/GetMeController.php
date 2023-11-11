<?php

namespace App\Http\Controllers\User;

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
    public function __invoke() {
        return $this->getMe();
    }
}
