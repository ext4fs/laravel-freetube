<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Delete(
 *     path="/comments/{commentId}",
 *     tags={"Comment"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentByIdController extends CommentController {
    public function __invoke(int $commentId) {
        return $this->deleteCommentById($commentId);
    }
}
