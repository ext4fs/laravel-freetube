<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\GetTagsRequest;

/**
 * @OA\Get (
 *     path="/tags",
 *     tags={"Tag"},
 *     summary="get all tags",
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetTagsController extends TagController {
    public function __invoke(GetTagsRequest $request) {
       return $this->getTags($request);
    }
}
