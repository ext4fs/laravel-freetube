<?php

namespace App\Http\Controllers\Tag;

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
    public function __invoke(int $tagId) {
        return $this->getTagById($tagId);
    }
}
