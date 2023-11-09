<?php

namespace App\Http\Controllers\File;

use App\Http\Requests\File\UploadFileRequest;

/**
 * @OA\Post(
 *     path="/files/upload",
 *     tags={"File"},
 *     @OA\Response(response="200", description="success")
 * )
 */
class UploadFileController extends FileController {
    public function __invoke(UploadFileRequest $request) {
        return $this->uploadFile($request);
    }
}
