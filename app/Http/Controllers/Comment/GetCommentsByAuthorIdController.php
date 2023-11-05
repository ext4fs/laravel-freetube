<?php

namespace App\Http\Controllers\Comment;

class GetCommentsByAuthorIdController extends CommentController {
    public function __invoke(int $authorId) {
        return $this->getCommentsByAuthorId($authorId);
    }
}
