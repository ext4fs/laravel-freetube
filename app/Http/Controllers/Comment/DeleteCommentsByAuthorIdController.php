<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\Comment\DeleteCommentsByAuthorIdRequest;

/**
 * @OA\Delete(
 *     path="/users/{userId}/comments",
 *     tags={"User"},
 *     summary="delete comments by given author id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsByAuthorIdController extends CommentController {
    public function __invoke(int $authorId, DeleteCommentsByAuthorIdRequest $request) {
        return $this->deleteCommentsByAuthorId($authorId, $request);
    }
}
