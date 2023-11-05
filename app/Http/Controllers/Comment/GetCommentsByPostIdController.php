<?php

namespace App\Http\Controllers\Comment;

class GetCommentsByPostIdController extends CommentController {
    public function __invoke(int $postId) {
        return $this->getCommentsByPostId($postId);
    }
}
