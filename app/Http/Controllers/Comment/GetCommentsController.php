<?php

namespace App\Http\Controllers\Comment;

class GetCommentsController extends CommentController {
    public function __invoke() {
        return $this->getComments();
    }
}
