<?php

namespace App\Http\Controllers\Post;

class GetPostsController extends PostController {
    public function __invoke() {
        return $this->getPosts();
    }
}
