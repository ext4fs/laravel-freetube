<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserByIdRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * @OA\Tag(
 *     name="User",
 *     description="endpoints for interacting with users",
 * )
 */
class UserController extends Controller {

    public function getUsers() {
        $users = User::all();
        return $users;
    }

    public function getUserById(int $userId) {
        $user = User::find($userId);
        return $user;
    }

    public function getMe() {
        return Auth::getUser();
    }

    public function getUserByPostId(int $postId) {

    }

    public function getUserByCommentId(int $commentId) {

    }

    public function createUser(CreateUserRequest $request) {
        $data = $request->input();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return $user;
    }

    public function updateUserById(int $userId, UpdateUserByIdRequest $request) {
        $user = User::find($userId);
        $data = $request->input();
        $user->update($data);
        return $user;
    }

    public function deleteUsers() {
        $users = User::truncate();
        return $users;
    }

    public function deleteUserById(int $userId) {
        $user = User::destroy($userId);
        return $user;
    }
}
