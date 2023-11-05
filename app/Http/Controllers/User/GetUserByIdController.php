<?php

namespace App\Http\Controllers\User;

class GetUserByIdController extends UserController {
    public function __invoke(string $userId) {
        return $this->getUserById($userId);
    }
}
