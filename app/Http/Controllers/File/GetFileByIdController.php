<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\File\FileController;

/**
 * @OA\Get(
 *     path="/files/{fileId}",
 *     tags={"File"},
 *     @OA\Response(response="200", description="success")
 * )
 */
class GetFileByIdController extends FileController {
    public function __invoke(string $fileId) {
        return $this->getFileById($fileId);
    }
}
