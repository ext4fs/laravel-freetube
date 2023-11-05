<?php

namespace App\Http\Controllers\Post;

class DeletePostsByAuthorId extends PostController {
    public function __invoke(int $authorId) {
        return $this->deletePostsByAuthorId($authorId);
    }
}
