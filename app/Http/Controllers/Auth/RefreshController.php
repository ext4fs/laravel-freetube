<?php

namespace App\Http\Controllers\Auth;

/**
 * @OA\Get(
 *     path="/auth/refresh",
 *     description="Refresh JWT token for Bearer authorization.",
 *     tags={"Auth"},
 *     @OA\Response(response="200", description="Success.")
 * )
 *
 */
class RefreshController extends AuthController {
    public function __invoke() {
        return $this->refresh();
    }
}
