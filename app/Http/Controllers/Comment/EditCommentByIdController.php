<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Http\Requests\Post\UpdatePostRequest;

class EditCommentByIdController extends CommentController {
    public function __invoke(int $commentId, UpdateCommentRequest $request) {
        return $this->updateCommentById($commentId, $request);
    }

}
