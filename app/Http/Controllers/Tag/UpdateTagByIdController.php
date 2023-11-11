<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\UpdateTagByIdRequest;

/**
 * @OA\Put (
 *     path="/tags/{tagId}",
 *     tags={"Tag"},
 *     summary="update a tag by given id",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class UpdateTagByIdController extends TagController {
    public function __invoke(int $tagId, UpdateTagByIdRequest $request) {
       return $this->updateTagById($tagId, $request);
    }
}
