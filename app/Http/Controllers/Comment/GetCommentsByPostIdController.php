<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\Comment\GetCommentsByPostIdRequest;

/**
 * @OA\Get(
 *     path="/posts/{postId}/comments",
 *     tags={"Post"},
 *     summary="get comments by given post id",
 *     @OA\Response(response="200", description="success")
 * )
 */
class GetCommentsByPostIdController extends CommentController {
    public function __invoke(int $postId, GetCommentsByPostIdRequest $request) {
        return $this->getCommentsByPostId($postId, $request);
    }
}
