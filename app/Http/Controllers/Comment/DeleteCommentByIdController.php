<?php

namespace App\Http\Controllers\Comment;

class DeleteCommentByIdController extends CommentController {
    public function __invoke(int $commentId) {
        return $this->deleteCommentById($commentId);
    }
}
