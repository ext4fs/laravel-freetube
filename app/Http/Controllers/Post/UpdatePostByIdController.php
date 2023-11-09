<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdatePostRequest;

class UpdatePostByIdController extends PostController {
    public function __invoke($postId, UpdatePostRequest $request) {
        return $this->updatePostById($postId, $request);
    }
}
