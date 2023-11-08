<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\SignUpRequest;

/**
 * @OA\Post(
 *     path="/auth/sign-up",
 *     description="Sign up for FreeTube.",
 *     tags={"Auth"},
 *     @OA\Response(response="200", description="success")
 * )
 */
class SignUpController extends AuthController {
    public function __invoke(SignUpRequest $request) {
        return $this->signUp($request);
    }
}
