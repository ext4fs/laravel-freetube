<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\DeleteUserByIdRequest;
use App\Http\Requests\User\DeleteUsersRequest;
use App\Http\Requests\User\GetMeRequest;
use App\Http\Requests\User\GetUserByIdRequest;
use App\Http\Requests\User\GetUserByPostIdRequest;
use App\Http\Requests\User\GetUsersRequest;
use App\Http\Requests\User\UpdateUserByIdRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * @OA\Tag(
 *     name="User",
 *     description="endpoints for interacting with users",
 * )
 * @OA\Schema(
 *    schema="UserId",
 *    type="string",
 *    format="uuid4",
 *    description="the unique identifier of a user"
 *  )
 *
 */
class UserController extends Controller {

    public function getUsers() {
        $users = User::all();
        return $users;
    }

    public function getUserById(string $userId) {
        $user = User::find($userId);
        return $user;
    }

    public function getMe() {
        return auth()->user();
    }

    public function getUserByPostId(int $postId) {
        $user = Post::find($postId)->author();
        return $user;
    }

    public function createUser(CreateUserRequest $request) {
        $data = $request->input();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return $user;
    }

    public function updateUserById(string $userId, UpdateUserByIdRequest $request) {
        $user = User::find($userId);
        $data = $request->input();
        $user->update($data);
        return $user;
    }

    public function deleteUsers() {
        $users = User::truncate();
        return $users;
    }

    public function deleteUserById(string $userId) {
        $user = User::find($userId);
        if (!request()->user()->cannot('delete', $user)) {
            abort(403);
        }
        $user->delete();
        return $user;
    }
}
