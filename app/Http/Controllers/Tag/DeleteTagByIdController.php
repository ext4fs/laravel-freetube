<?php

namespace App\Http\Controllers\Tag;

/**
 * @OA\Delete (
 *     path="/tags/{tagId}",
 *     tags={"Tag"},
 *     summary="delete a tag by given id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeleteTagByIdController extends TagController {
    public function __invoke(int $tagId) {
        return $this->deleteTagById($tagId);
    }
}
