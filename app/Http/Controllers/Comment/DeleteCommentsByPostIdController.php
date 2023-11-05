<?php

namespace App\Http\Controllers\Comment;

class DeleteCommentsByPostIdController extends CommentController {
    public function __invoke(int $postId) {
        return $this->deleteCommentsByPostId($postId);
    }
}
