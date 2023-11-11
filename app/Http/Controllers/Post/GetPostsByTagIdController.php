<?php

namespace App\Http\Controllers\Post;

/**
 * @OA\Get (
 *     path="/tags/{tagId}/posts",
 *     tags={"Tag"},
 *     summary="get posts by given tag id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 *
 *
 */
class GetPostsByTagIdController extends PostController {
    public function __invoke(int $tagId) {
        return $this->getPostsByTagId($tagId);
    }
}
