<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/users/{userId}/posts/{postId}/comments",
 *     tags={"User"},
 *     summary="get comments by post and author ids",
 *     @OA\Response(
 *         response="200",
 *         description="success",
 *     )
 * )
 */
class GetCommentsByPostIdAndAuthorIdController extends CommentController
{
    public function __invoke(int $postId, string $userId) {
        return $this->getCommentsByPostIdAndAuthorId($postId, $userId);
    }
}
