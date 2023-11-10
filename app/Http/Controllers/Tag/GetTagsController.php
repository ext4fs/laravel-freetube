<?php

namespace App\Http\Controllers\Tag;

/**
 * @OA\Get (
 *     path="/tags",
 *     tags={"Tag"},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetTagsController extends TagController {
    public function __invoke() {
       return $this->getTags();
    }
}
