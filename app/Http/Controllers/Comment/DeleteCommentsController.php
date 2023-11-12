<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\Comment\DeleteCommentsRequest;

/**
 * @OA\Delete(
 *     path="/comments",
 *     tags={"Comment"},
 *     summary="delete all comments",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCommentsController extends CommentController {
    public function __invoke(DeleteCommentsRequest $request) {
        return $this->deleteComments($request);
    }
}
