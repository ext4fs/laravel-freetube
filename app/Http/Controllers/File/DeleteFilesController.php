<?php

namespace App\Http\Controllers\File;

/**
 * @OA\Delete(
 *     path="/files",
 *     tags={"File"},
 *     @OA\Response(response="200", description="success")
 * )
 */
class DeleteFilesController extends FileController {
    public function __invoke() {
        return $this->deleteFiles();
    }
}
