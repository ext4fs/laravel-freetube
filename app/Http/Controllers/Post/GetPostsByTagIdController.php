<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\PostController;

class GetPostsByTagIdController extends PostController {
    public function __invoke(int $tagId) {
        return $this->getPostsByTagId($tagId);
    }
}
