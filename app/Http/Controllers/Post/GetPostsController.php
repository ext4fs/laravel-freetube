<?php

namespace App\Http\Controllers\Post;
/**
 * @OA\Get(
 *     path="/posts",
 *     tags={"Post"},
 *     summary="Get all posts",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetPostsController extends PostController {
    public function __invoke() {
        return $this->getPosts();
    }
}
