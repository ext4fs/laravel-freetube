<?php

namespace App\Http\Controllers\Post;
/**
 * @OA\Get(
 *     path="/users/{authorId}/posts",
 *     tags={"User"},
 *     summary="get posts by given author id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetPostsByAuthorIdController extends PostController {
    public function __invoke(string $userId) {
        return $this->getPostsByAuthorId($userId);
    }
}
