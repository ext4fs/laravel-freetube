<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\CreatePostRequest;

/**
 * @OA\Post(
 *     path="/posts",
 *     tags={"Post"},
 *     summary="create a post",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class CreatePostController extends PostController {
    public function __invoke(CreatePostRequest $request) {
        return $this->createPost($request);
    }
}
