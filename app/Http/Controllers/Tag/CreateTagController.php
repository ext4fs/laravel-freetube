<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\CreateTagRequest;

class CreateTagController extends TagController {
    public function __invoke(CreateTagRequest $request) {
        return $this->createTag($request);
    }
}
