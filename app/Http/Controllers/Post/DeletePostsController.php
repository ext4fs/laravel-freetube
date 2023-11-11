<?php

namespace App\Http\Controllers\Post;
/**
 * @OA\Delete(
 *     path="/posts",
 *     tags={"Post"},
 *     summary="delete all posts",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostsController extends PostController {
    public function __invoke() {
        return $this->deletePosts();
    }
}
