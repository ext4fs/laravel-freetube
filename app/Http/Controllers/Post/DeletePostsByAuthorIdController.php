<?php

namespace App\Http\Controllers\Post;

/**
 * @OA\Delete(
 *     path="/users/{authorId}/posts",
 *     tags={"User"},
 *     summary="delete posts by given author id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostsByAuthorIdController extends PostController {
    public function __invoke(string $userId) {
        return $this->deletePostsByAuthorId($userId);
    }
}
