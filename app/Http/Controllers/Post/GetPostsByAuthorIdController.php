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
 *         description="posts with given author id"
 *     )
 * )
 */
class GetPostsByAuthorIdController extends PostController {
    public function __invoke(string $userId, GetPostsByAuthorIdRequest $request) {
        return $this->getPostsByAuthorId($userId, $request);
    }
}
