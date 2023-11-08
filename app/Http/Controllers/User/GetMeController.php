<?php

namespace App\Http\Controllers\User;

class GetMeController extends UserController  {
    public function __invoke() {
        return $this->getMe();
    }
}
