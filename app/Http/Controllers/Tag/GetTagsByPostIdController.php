<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Tag\TagController;

class GetTagsByPostIdController extends TagController {
    public function __invoke(int $postId) {
        return $this->getTagsByPostId($postId);
    }
}
