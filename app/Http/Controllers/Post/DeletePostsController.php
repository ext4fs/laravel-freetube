<?php

namespace App\Http\Controllers\Post;

class DeletePostsController extends PostController {
    public function __invoke() {
        return $this->deletePosts();
    }
}
