<?php

namespace App\Http\Controllers\Auth;

/**
 * @OA\Get(
 *     path="/auth/logout",
 *     description="Log out from account.",
 *     tags={"Auth"},
 *     @OA\Response(response="200", description="Success")
 * )
 */
class LogOutController extends AuthController {
    public function __invoke() {
        return $this->logOut();
    }
}
