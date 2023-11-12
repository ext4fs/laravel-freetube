<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\DeleteTagByIdRequest;

/**
 * @OA\Delete (
 *     path="/tags/{tagId}",
 *     tags={"Tag"},
 *     summary="delete a tag by given id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeleteTagByIdController extends TagController {
    public function __invoke(int $tagId, DeleteTagByIdRequest $request) {
        return $this->deleteTagById($tagId, $request);
    }
}
