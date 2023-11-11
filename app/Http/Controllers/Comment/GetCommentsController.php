<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Get(
 *     path="/comments",
 *     tags={"Comment"},
 *     summary="get all comments",
 *     @OA\Response(response="200", description="success"),
 * )
 */
class GetCommentsController extends CommentController {
    public function __invoke() {
        return $this->getComments();
    }
}
