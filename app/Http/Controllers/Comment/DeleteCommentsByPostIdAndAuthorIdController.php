<?php

namespace App\Http\Controllers\Comment;

class DeleteCommentsByPostIdAndAuthorIdController extends CommentController {
    public function __invoke(int $postId, string $userId) {
        return $this->deleteCommentsByPostIdAndAuthorId($postId, $userId);
    }
}
