<?php

namespace App\Http\Controllers\Tag;

/**
 * @OA\Delete (
 *     path="/tags",
 *     tags={"Tag"},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class DeleteTagsController extends TagController {
    public function __invoke() {
        return $this->deleteTags();
    }
}
