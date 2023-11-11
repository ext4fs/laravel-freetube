<?php

namespace App\Http\Controllers\Post;
/**
 * @OA\Get(
 *     path="/categories/{categoryId}/posts",
 *     tags={"Category"},
 *     summary="get posts by given category id",
 *     @OA\Response(
 *         response="200",
 *         description="success",
 *     )
 * )
 *
 */
class GetPostsByCategoryIdController extends PostController {
    public function __invoke(int $categoryId) {
        return $this->getPostsByCategoryId($categoryId);
    }
}
