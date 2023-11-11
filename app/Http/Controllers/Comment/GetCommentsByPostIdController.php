<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Get(
 *     path="/posts/{postId}/comments",
 *     tags={"Comment"},
 *     summary="get comments by given post id",
 *     @OA\Response(response="200", description="success")
 * )
 */
class GetCommentsByPostIdController extends CommentController {
    public function __invoke(int $postId) {
        return $this->getCommentsByPostId($postId);
    }
}
