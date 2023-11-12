<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\DeletePostsRequest;

/**
 * @OA\Delete(
 *     path="/posts",
 *     tags={"Post"},
 *     summary="delete all posts",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostsController extends PostController {
    public function __invoke(DeletePostsRequest $request) {
        return $this->deletePosts($request);
    }
}
