<?php

namespace App\Http\Controllers\File;

/**
 * @OA\Get(
 *     path="/files/{fileId}/download",
 *     tags={"File"},
 *     summary="download a binary file by given id",
 *     @OA\Response(response="200", description="success")
 * )
 */
class DownloadFileByIdController extends FileController {
    public function __invoke(string $fileId) {
        return $this->downloadFileById($fileId);
    }
}
