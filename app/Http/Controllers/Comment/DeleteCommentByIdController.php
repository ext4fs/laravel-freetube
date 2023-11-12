<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\Comment\DeleteCommentByIdRequest;

/**
 * @OA\Delete(
 *     path="/comments/{commentId}",
 *     tags={"Comment"},
 *     summary="delete a comment by given id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentByIdController extends CommentController {
    public function __invoke(int $commentId, DeleteCommentByIdRequest $request) {
        return $this->deleteCommentById($commentId, $request);
    }
}
