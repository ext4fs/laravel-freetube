<?php

namespace App\Http\Controllers\Auth;

/**
 * @OA\Get(
 *     path="/auth/refresh",
 *     summary="refresh the jwt token for authorization",
 *     tags={"Auth"},
 *     @OA\Response(response="200", description="success")
 * )
 *
 */
class RefreshController extends AuthController {
    public function __invoke() {
        return $this->refresh();
    }
}
