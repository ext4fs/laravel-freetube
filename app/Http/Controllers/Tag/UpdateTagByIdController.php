<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Tag\TagController;
use App\Http\Requests\UpdateTagRequest;

class UpdateTagByIdController extends TagController {
    public function __invoke(int $tagId, UpdateTagRequest $request) {
       return $this->updateTagById($tagId, $request);
    }
}
