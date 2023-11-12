<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\GetTagsByPostIdRequest;

/**
 * @OA\Get (
 *     path="/posts/{postId}/tags",
 *     tags={"Post"},
 *     summary="get tags by given post id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetTagsByPostIdController extends TagController {
    public function __invoke(int $postId, GetTagsByPostIdRequest $request) {
        return $this->getTagsByPostId($postId, $request);
    }
}
