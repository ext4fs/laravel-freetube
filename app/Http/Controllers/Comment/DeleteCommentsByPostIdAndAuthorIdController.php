<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\Comment\DeleteCommentsByPostIdAndAuthorIdRequest;

/**
 * @OA\Delete(
 *     path="/users/{userId}/posts/{postId}/comments",
 *     tags={"User"},
 *     summary="delete comments by given post and author ids",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsByPostIdAndAuthorIdController extends CommentController {
    public function __invoke(int $postId, string $userId, DeleteCommentsByPostIdAndAuthorIdRequest $request) {
        return $this->deleteCommentsByPostIdAndAuthorId($postId, $userId, $request);
    }
}
