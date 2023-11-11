<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\DeleteUserByIdRequest;
use App\Http\Requests\User\DeleteUsersRequest;
use App\Http\Requests\User\GetMeRequest;
use App\Http\Requests\User\GetUserByIdRequest;
use App\Http\Requests\User\GetUsersRequest;
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

    public function getUsers(GetUsersRequest $request) {
        $users = User::all();
        return $users;
    }

    public function getUserById(int $userId, GetUserByIdRequest $request) {
        $user = User::find($userId);
        return $user;
    }

    public function getMe(GetMeRequest $request) {
        return Auth::getUser();
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

    public function deleteUsers(DeleteUsersRequest $request) {
        $users = User::truncate();
        return $users;
    }

    public function deleteUserById(int $userId, DeleteUserByIdRequest $request) {
        $user = User::destroy($userId);
        return $user;
    }
}
