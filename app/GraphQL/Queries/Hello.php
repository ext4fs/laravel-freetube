<?php

namespace App\GraphQL\Queries;

class Hello {
    public function __invoke() {
        return "Hello World!";
    }
}
