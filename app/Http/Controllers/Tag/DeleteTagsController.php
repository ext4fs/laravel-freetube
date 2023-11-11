<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\DeleteTagsRequest;

/**
 * @OA\Delete (
 *     path="/tags",
 *     tags={"Tag"},
 *     summary="delete all tags",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeleteTagsController extends TagController {
    public function __invoke(DeleteTagsRequest $request) {
        return $this->deleteTags($request);
    }
}
