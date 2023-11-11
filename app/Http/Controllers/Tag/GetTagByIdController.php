<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\GetTagByIdRequest;

/**
 * @OA\Get (
 *     path="/tags/{tagId}",
 *     tags={"Tag"},
 *     summary="get a tag by given id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetTagByIdController extends TagController {
    public function __invoke(int $tagId, GetTagByIdRequest $request) {
        return $this->getTagById($tagId, $request);
    }
}
