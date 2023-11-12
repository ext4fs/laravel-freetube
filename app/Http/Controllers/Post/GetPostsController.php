<?php

namespace App\Http\Controllers\Post;
use App\Http\Requests\Post\GetPostsRequest;

/**
 * @OA\Get(
 *     path="/posts",
 *     tags={"Post"},
 *     summary="get all posts",
 *
 *     @OA\Response(
 *         response="200",
 *         description="all posts"
 *     )
 * )
 */
class GetPostsController extends PostController {
    public function __invoke(GetPostsRequest $request) {
        return $this->getPosts($request);
    }
}
