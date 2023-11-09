<?php

namespace App\Http\Controllers\Tag;

class DeleteTagByIdController extends TagController {
    public function __invoke(int $tagId) {
        return $this->deleteTagById($tagId);
    }
}
