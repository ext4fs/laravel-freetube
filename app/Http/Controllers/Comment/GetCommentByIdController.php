<?php

namespace App\Http\Controllers\Comment;

class GetCommentByIdController extends CommentController {
    public function __invoke(int $commentId) {
        return $this->getCommentById($commentId);
    }
}
