<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\CreateCommentRequest;
/**
 * @OA\Post(
 *     path="/comments",
 *     tags={"Comment"},
 *     summary="create a comment",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class CreateCommentController extends CommentController {
    public function __invoke(CreateCommentRequest $request) {
        return $this->createComment($request);
    }
}
