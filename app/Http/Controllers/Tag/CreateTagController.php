<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\CreateTagRequest;

/**
 * @OA\Post (
 *     path="/tags",
 *     tags={"Tag"},
 *     summary="create a tag",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class CreateTagController extends TagController {
    public function __invoke(CreateTagRequest $request) {
        return $this->createTag($request);
    }
}
