<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LogInRequest;

/**
 * @OA\Post(
 *     path="/auth/login",
 *     description="Log into account.",
 *     tags={"Auth"},
 *     @OA\Response(response="200", description="Success")
 * )
 */
class LogInController extends AuthController {
    public function __invoke(LogInRequest $request) {
        return $this->logIn($request);
    }
}
