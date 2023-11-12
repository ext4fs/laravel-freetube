<?php

namespace App\Http\Controllers\Post;
use App\Http\Requests\Post\GetPostsByAuthorIdRequest;

/**
 * @OA\Get(
 *     path="/users/{userId}/posts",
 *     tags={"User"},
 *     @OA\Parameter(
 *            name="userId",
 *            in="path",
 *            required=true,
 *            @OA\Schema(
 *                type="string"
 *            ),
 *      ),
 *     summary="get posts by given author id",
 *     @OA\Response(
 *         response="200",
 *         description="a post"
 *     )
 * )
 */
class GetPostsByAuthorIdController extends PostController {
    public function __invoke(string $authorId, GetPostsByAuthorIdRequest $request) {
        return $this->getPostsByAuthorId($userId, $request);
    }
}
