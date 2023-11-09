<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Tag\TagController;

class GetTagByIdController extends TagController {
    public function __invoke(int $tagId) {
        return $this->getTagById($tagId);
    }
}
