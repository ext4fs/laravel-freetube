<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\SignUpRequest;

/**
 * @OA\Post(
 *     path="/auth/sign-up",
 *     summary="sign up for freetube",
 *     tags={"Auth"},
 *     @OA\RequestBody (
 *         @OA\JsonContent(ref="#/components/schemas/SignUpRequest")
 *     ),
 *     @OA\Response(response="200", description="success", @OA\JsonContent())
 * )
 */
class SignUpController extends AuthController {
    public function __invoke(SignUpRequest $request) {
        return $this->signUp($request);
    }
}
