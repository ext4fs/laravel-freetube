<?php

namespace App\Http\Controllers\File;

/**
 * @OA\Get(
 *     path="/files",
 *     tags={"File"},
 *     summary="get all fiels",
 *     @OA\Response(response="200", description="success")
 * )
 *
 */
class GetFilesController extends FileController {
    public function __invoke() {
        return $this->getFiles();
    }
}
