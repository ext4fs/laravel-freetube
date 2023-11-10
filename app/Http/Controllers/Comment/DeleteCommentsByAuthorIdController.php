<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Delete(
 *     path="/users/{userId}/comments",
 *     tags={"User"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsByAuthorIdController extends CommentController {
    public function __invoke(int $authorId) {
        return $this->deleteCommentsByAuthorId($authorId);
    }
}
