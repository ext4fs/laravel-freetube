<?php

namespace App\Http\Controllers\Post;

/**
 * @OA\Delete(
 *     path="/posts/{postId}",
 *     tags={"Post"},
 *     summary="Delete a post by given id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostByIdController extends PostController {
    public function __invoke(int $postId) {
        return $this->deletePostById($postId);
    }
}
