<?php

namespace App\Http\Controllers\Auth;


/**
 * @OA\Post(
 *     path="/auth/sign-up",
 *     description="Sign up for FreeTube.",
 *     tags={"Auth"},
 *     @OA\Response(response="200", description="success")
 * )
 */
class SignUpController extends AuthController {
    public function __invoke() {
        // TODO: Implement __invoke() method.
    }
}
