<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\GetPostsByCategoryIdRequest;

/**
 * @OA\Get(
 *     path="/categories/{categoryId}/posts",
 *     tags={"Category"},
 *     @OA\Parameter(
 *            name="categoryId",
 *            in="path",
 *            required=true,
 *            @OA\Schema(
 *                type="integer"
 *            ),
 *      ),
 *     summary="get posts by given category id",
 *     @OA\Response(
 *         response="200",
 *         description="posts with given category id",
 *     )
 * )
 *
 */
class GetPostsByCategoryIdController extends PostController {
    public function __invoke(int $categoryId, GetPostsByCategoryIdRequest $request) {
        return $this->getPostsByCategoryId($categoryId, $request);
    }
}
