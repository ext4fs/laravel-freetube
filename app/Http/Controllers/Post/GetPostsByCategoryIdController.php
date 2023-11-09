<?php

namespace App\Http\Controllers\Post;

class GetPostsByCategoryIdController extends PostController {
    public function __invoke(int $categoryId) {
        return $this->getPostsByCategoryId($categoryId);
    }
}
