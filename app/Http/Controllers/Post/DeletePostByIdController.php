<?php

namespace App\Http\Controllers\Post;

class DeletePostByIdController extends PostController {
    public function __invoke(int $postId) {
        return $this->deletePostById($postId);
    }
}
