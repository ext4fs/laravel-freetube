<?php

namespace App\Http\Controllers\Post;

class GetPostByIdController extends PostController {
    public function __invoke(int $postId) {
        return $this->getPostById($postId);
    }
}
