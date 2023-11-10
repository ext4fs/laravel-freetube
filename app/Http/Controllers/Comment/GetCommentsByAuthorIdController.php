<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Get(
 *     path="/users/{userId}/comments",
 *     tags={"Comment"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class GetCommentsByAuthorIdController extends CommentController {
    public function __invoke(int $authorId) {
        return $this->getCommentsByAuthorId($authorId);
    }
}
