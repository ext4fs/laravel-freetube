<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Tag\TagController;
use App\Http\Requests\CreateTagRequest;

class CreateTagController extends TagController {
    public function __invoke(CreateTagRequest $request) {
        return $this->createTag($request);
    }
}
