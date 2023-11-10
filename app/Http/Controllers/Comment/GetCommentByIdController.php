<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Get(
 *     path="/comments/{commentId}",
 *     tags={"Comment"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class GetCommentByIdController extends CommentController {
    public function __invoke(int $commentId) {
        return $this->getCommentById($commentId);
    }
}
