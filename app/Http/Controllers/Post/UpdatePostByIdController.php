<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdatePostByIdRequest;

/**
 * @OA\Put(
 *     path="/posts/{postId}",
 *     tags={"Post"},
 *     @OA\RequestBody(
 *         @OA\JsonContent(ref="#/components/schemas/UpdatePostRequest")
 *     ),
 *     @OA\Parameter(
 *            name="postId",
 *            in="path",
 *            required=true,
 *            @OA\Schema(
 *                 type="integer"
 *             ),
 *      ),
 *     summary="update a post by given id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(
 *         response="200",
 *         description="updated post with given id",
 *     )
 * )
 */
class UpdatePostByIdController extends PostController {
    public function __invoke($postId, UpdatePostByIdRequest $request) {
        return $this->updatePostById($postId, $request);
    }
}
