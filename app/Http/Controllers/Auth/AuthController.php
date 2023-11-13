<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LogInRequest;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\Auth;

/**
 * @OA\Tag(
 *     name="Auth",
 *     description="endpoints for JWT authentication",
 * )
 */
class AuthController extends Controller {

    public function logIn(LogInRequest $request) {
        $data = $request->validated();
        return $this->verifyUserCreditials($data['email'], $data['password']);
    }

    protected function verifyUserCreditials($email, $password) {
        if (!$token = auth()->attempt(['email' => $email, 'password' => $password])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token) {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function signUp(SignUpRequest $request) {
        $data = $request->validated();
        try {
            $user = User::create($data);
            return $this->verifyUserCreditials($user->email, $data['password']);
        } catch (UniqueConstraintViolationException $e) {
            return response()->json([
                'error' => 'email is already taken'
            ]);
        }
    }

    public function logOut() {
        auth()->logout();
        return true;
    }

    public function refresh() {
        return $this->respondWithToken(auth()->refresh());
    }
}
