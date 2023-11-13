<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserController;
use App\Http\Requests\User\GetUserByPostIdRequest;

class GetUserByPostId extends UserController {
    public function __invoke(int $postId, GetUserByPostIdRequest $request) {
        return $this->getUserByPostId($postId, $request);
    }
}
