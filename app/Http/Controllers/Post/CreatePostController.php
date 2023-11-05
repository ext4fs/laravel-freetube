<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\CreatePostRequest;

class CreatePostController extends PostController {
    public function __invoke(CreatePostRequest $request) {
        return $this->createPost($request);
    }
}
