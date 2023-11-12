<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\Comment\GetCommentByIdRequest;

/**
 * @OA\Get(
 *     path="/comments/{commentId}",
 *     tags={"Comment"},
 *     summary="get a comment by given id",
 *     @OA\Response(response="200", description="success"),
 * )
 */
class GetCommentByIdController extends CommentController {
    public function __invoke(int $commentId, GetCommentByIdRequest $request) {
        return $this->getCommentById($commentId, $request);
    }
}
