<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\CreateCommentRequest;

class CreateCommentController extends CommentController {
    public function __invoke(CreateCommentRequest $request) {
        return $this->createComment($request);
    }
}
