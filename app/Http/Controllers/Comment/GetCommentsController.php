<?php

namespace App\Http\Controllers\Comment;
use App\Http\Requests\Comment\GetCommentsRequest;

/**
 * @OA\Get(
 *     path="/comments",
 *     tags={"Comment"},
 *     summary="get all comments",
 *     @OA\Response(response="200", description="success"),
 * )
 */
class GetCommentsController extends CommentController {
    public function __invoke(GetCommentsRequest $request) {
        return $this->getComments($request);
    }
}
