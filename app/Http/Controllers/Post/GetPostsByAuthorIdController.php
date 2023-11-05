<?php

namespace App\Http\Controllers\Post;

class GetPostsByAuthorIdController extends PostController {
    public function __invoke(int $authorId) {
        return $this->getPostsByAuthorId($authorId);
    }
}
