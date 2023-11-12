<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\GetPostsByTagIdRequest;

/**
 * @OA\Get (
 *     path="/tags/{tagId}/posts",
 *     tags={"Tag"},
 *     @OA\Parameter(
 *            name="tagId",
 *            in="path",
 *            required=true,
 *            @OA\Schema(
 *                type="integer"
 *            ),
 *      ),
 *     summary="get posts by given tag id",
 *     @OA\Response(
 *         response="200",
 *         description="posts with given tag id"
 *     )
 * )
 *
 *
 */
class GetPostsByTagIdController extends PostController {
    public function __invoke(int $tagId, GetPostsByTagIdRequest $request) {
        return $this->getPostsByTagId($tagId, $request);
    }
}
