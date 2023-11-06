<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller {
    //
    public function getUsers() {
        $users = User::all();
        return $users;
    }

    public function getUserById(int $userId) {
        $user = User::find($userId);
        return $user;
    }

    public function createUser(CreateUserRequest $request) {
        $data = $request->input();
        $user = User::create($data);
        return $user;
    }

    public function updateUserById(int $userId, UpdateUserRequest $request) {
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