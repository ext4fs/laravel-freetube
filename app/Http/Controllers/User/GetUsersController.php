<?php

namespace App\Http\Controllers\User;

class GetUsersController extends UserController {
    public function __invoke() {
        return $this->getUsers();
    }
}
