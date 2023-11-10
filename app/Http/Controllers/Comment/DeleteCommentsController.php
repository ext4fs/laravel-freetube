<?php

namespace App\Http\Controllers\Comment;
/**
 * @OA\Delete(
 *     path="/comments",
 *     tags={"Comment"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsController extends CommentController {
    public function __invoke() {
        return $this->deleteComments();
    }
}
