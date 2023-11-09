<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Comment\CommentController;

class DeleteCommentsByPostIdAndAuthorIdController extends CommentController {
    public function __invoke(int $postId, string $userId) {
        return $this->deleteCommentsByPostIdAndAuthorId($postId, $userId);
    }
}
