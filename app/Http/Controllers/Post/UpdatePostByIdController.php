<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdatePostRequest;

/**
 * @OA\Put(
 *     path="/posts/{postId}",
 *     tags={"Post"},
 *     summary="update a post by given post id",
 *     @OA\Response(
 *         response="200",
 *         description="success",
 *     )
 * )
 */
class UpdatePostByIdController extends PostController {
    public function __invoke($postId, UpdatePostRequest $request) {
        return $this->updatePostById($postId, $request);
    }
}
