<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Comment\CommentController;

class DeleteCommentsController extends CommentController {
    public function __invoke() {
        return $this->deleteComments();
    }
}
