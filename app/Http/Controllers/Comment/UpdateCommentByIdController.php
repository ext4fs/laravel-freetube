<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\UpdateCommentRequest;

class UpdateCommentByIdController extends CommentController {
    public function __invoke(int $commentId, UpdateCommentRequest $request) {
        return $this->updateCommentById($commentId, $request);
    }

}
