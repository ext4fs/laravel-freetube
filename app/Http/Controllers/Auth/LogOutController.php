<?php

namespace App\Http\Controllers\Auth;

/**
 * @OA\Get(
 *     path="/auth/logout",
 *     summary="log out from the account",
 *     tags={"Auth"},
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success")
 * )
 */
class LogOutController extends AuthController {
    public function __invoke() {
        return $this->logOut();
    }
}
