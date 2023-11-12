<?php

namespace App\Http\Controllers\Post;
use App\Http\Requests\Post\GetPostByIdRequest;

/**
 * @OA\Get(
 *     path="/posts/{postId}",
 *     tags={"Post"},
 *     @OA\Parameter(name="postId",
 *              in="path",
 *              required=true,
 *              @OA\Schema (
 *                  type="integer"
 *              )
 *      ),
 *     summary="get a post by given id",
 *     @OA\Response(
 *         response="200",
 *         description="a post"
 *     )
 * )
 */
class GetPostByIdController extends PostController {
    public function __invoke(int $postId, GetPostByIdRequest $request) {
        return $this->getPostById($postId, $request);
    }
}
