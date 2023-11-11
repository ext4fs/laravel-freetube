<?php

namespace App\Http\Controllers\File;

/**
 * @OA\Get(
 *     path="/files/{fileId}",
 *     tags={"File"},
 *     summary="get a file by given id",
 *     @OA\Response(response="200", description="success")
 * )
 */
class GetFileByIdController extends FileController {
    public function __invoke(string $fileId) {
        return $this->getFileById($fileId);
    }
}
