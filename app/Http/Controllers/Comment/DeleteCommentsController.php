<?php

namespace App\Http\Controllers\Comment;

class DeleteCommentsController extends CommentController {
    public function __invoke() {
        return $this->deleteComments();
    }
}
