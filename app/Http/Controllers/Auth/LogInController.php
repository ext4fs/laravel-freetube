<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LogInRequest;

/**
 * @OA\Post(
 *     path="/auth/login",
 *     summary="log into the account",
 *     tags={"Auth"},
 *     @OA\RequestBody (
 *          @OA\JsonContent(ref="#/components/schemas/LogInRequest")
 *      ),
 *     @OA\Response(response="200", description="success")
 * )
 */
class LogInController extends AuthController {
    public function __invoke(LogInRequest $request) {
        return $this->logIn($request);
    }
}
