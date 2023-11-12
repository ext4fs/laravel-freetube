<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\DeleteCommentsByPostIdRequest;

/**
 * @OA\Delete(
 *     path="/posts/{postId}/comments",
 *     tags={"Post"},
 *     summary="delete comments by given post id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsByPostIdController extends CommentController {
    public function __invoke(int $postId, DeleteCommentsByPostIdRequest $request) {
        return $this->deleteCommentsByPostId($postId, $request);
    }
}
