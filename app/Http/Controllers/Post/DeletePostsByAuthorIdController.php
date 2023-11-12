<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\DeletePostsByAuthorIdRequest;

/**
 * @OA\Delete(
 *     path="/users/{userId}/posts",
 *     tags={"User"},
 *     summary="delete posts by given author id",
 *     @OA\Parameter(
 *             name="userId",
 *             in="path",
 *             required=true,
 *             @OA\Schema(
 *                 type="integer"
 *             ),
 *       ),
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeletePostsByAuthorIdController extends PostController {
    public function __invoke(string $userId, DeletePostsByAuthorIdRequest $request) {
        return $this->deletePostsByAuthorId($userId, $request);
    }
}
