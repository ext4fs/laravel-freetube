<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\DeletePostByIdRequest;

/**
 * @OA\Delete(
 *     path="/posts/{postId}",
 *     tags={"Post"},
 *     summary="delete a post by given id",
 *     @OA\Parameter(
 *             name="postId",
 *             in="path",
 *             required=true,
 *             @OA\Schema (
 *                 type="integer"
 *             )
 *       ),
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostByIdController extends PostController {
    public function __invoke(int $postId, DeletePostByIdRequest $request) {
        return $this->deletePostById($postId, $request);
    }
}
