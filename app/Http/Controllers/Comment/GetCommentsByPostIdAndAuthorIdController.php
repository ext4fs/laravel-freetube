<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetCommentsByPostIdAndAuthorIdRequest;

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
    public function __invoke(int $postId, string $userId, GetCommentsByPostIdAndAuthorIdRequest $request) {
        return $this->getCommentsByPostIdAndAuthorId($postId, $userId, $request);
    }
}
