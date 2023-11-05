<?php

namespace App\Http\Controllers\Comment;

class DeleteCommentsByAuthorIdController extends CommentController {
    public function __invoke(int $authorId) {
        return $this->deleteCommentsByAuthorId($authorId);
    }
}
