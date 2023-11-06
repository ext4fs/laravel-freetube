<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LogInRequest;

class LogInController extends AuthController {
    public function __invoke(LogInRequest $request) {
        return $this->logIn($request);
    }
}
