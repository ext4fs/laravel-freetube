<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\UpdateCommentRequest;
/**
 * @OA\Put(
 *     path="/comments/{commentId}",
 *     tags={"Comment"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class UpdateCommentByIdController extends CommentController {
    public function __invoke(int $commentId, UpdateCommentRequest $request) {
        return $this->updateCommentById($commentId, $request);
    }

}
