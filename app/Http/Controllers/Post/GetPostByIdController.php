<?php

namespace App\Http\Controllers\Post;
/**
 * @OA\Get(
 *     path="/posts/{postId}",
 *     tags={"Post"},
 *     summary="Get a post by given id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetPostByIdController extends PostController {
    public function __invoke(int $postId) {
        return $this->getPostById($postId);
    }
}
