<?php

namespace App\Http\Controllers\User;

class DeleteUserByIdController extends UserController {
    public function __invoke(int $userId) {
        return $this->deleteUserById($userId);
    }
}
