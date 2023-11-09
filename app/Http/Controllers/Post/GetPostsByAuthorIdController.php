<?php

namespace App\Http\Controllers\Post;
/**
 * @OA\Get(
 *     path="/users/{authorId}/posts",
 *     tags={"User"},
 *     summary="Get all posts by given author id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetPostsByAuthorIdController extends PostController {
    public function __invoke(int $authorId) {
        return $this->getPostsByAuthorId($authorId);
    }
}
