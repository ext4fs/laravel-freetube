<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Delete(
 *     path="/users/{userId}/posts/{postId}/comments",
 *     tags={"User"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsByPostIdAndAuthorIdController extends CommentController {
    public function __invoke(int $postId, string $userId) {
        return $this->deleteCommentsByPostIdAndAuthorId($postId, $userId);
    }
}
