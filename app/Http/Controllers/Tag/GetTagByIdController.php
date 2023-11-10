<?php

namespace App\Http\Controllers\Tag;

/**
 * @OA\Get (
 *     path="/tags/{tagId}",
 *     tags={"Tag"},
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
