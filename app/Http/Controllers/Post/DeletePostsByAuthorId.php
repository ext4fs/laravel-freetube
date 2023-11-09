<?php

namespace App\Http\Controllers\Post;

/**
 * @OA\Delete(
 *     path="/users/{authorId}/posts",
 *     tags={"User"},
 *     summary="Delete posts by given author id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostsByAuthorId extends PostController {
    public function __invoke(int $authorId) {
        return $this->deletePostsByAuthorId($authorId);
    }
}
