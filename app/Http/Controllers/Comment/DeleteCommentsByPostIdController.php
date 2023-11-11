<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Post(
 *     path="/posts/{postId}/comments",
 *     tags={"Post"},
 *     summary="delete comments by given post id",
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsByPostIdController extends CommentController {
    public function __invoke(int $postId) {
        return $this->deleteCommentsByPostId($postId);
    }
}
