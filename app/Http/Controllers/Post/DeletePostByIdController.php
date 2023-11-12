<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\DeletePostsRequest;

/**
 * @OA\Delete(
 *     path="/posts/{postId}",
 *     tags={"Post"},
 *     summary="delete a post by given id",
 *     @OA\Parameter(
 *             name="postId",
 *             in="path",
 *             required=true,
 *             ref="#/components/schemas/PostId",
 *       ),
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostByIdController extends PostController {
    public function __invoke(int $postId, DeletePostsRequest $request) {
        return $this->deletePostById($postId, $request);
    }
}
