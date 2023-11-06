<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LogInRequest;
use App\Http\Requests\Auth\SignUpRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function logIn(LogInRequest $request) {
        $data = $request->only(['email', 'password']);
        if (Auth::attempt($data)) {
            return true;
        }
        return response()->status(403);
    }

    public function signUp(SignUpRequest $request) {

    }

    public function logOut() {

    }
}
