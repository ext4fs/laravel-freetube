<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\File\FileController;

/**
 * @OA\Get(
 *     path="/files/{fileId}/download",
 *     tags={"File"},
 *     @OA\Response(response="200", description="success")
 * )
 */
class DownloadFileByIdController extends FileController {
    public function __invoke(string $fileId) {
        return $this->downloadFileById($fileId);
    }
}
