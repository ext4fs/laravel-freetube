<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserController;

class DeleteUsersController extends UserController {
    public function __invoke() {
        return $this->deleteUsers();
    }
}
