<?php

namespace App\Http\Controllers\File;

/**
 * @OA\Delete(
 *     path="/files/{fileId}",
 *     tags={"File"},
 *     @OA\Response(response="200", description="success")
 * )
 */
class DeleteFileByIdController extends FileController {
    public function __invoke(string $fileId) {
        return $this->deleteFileById($fileId);
    }
}
