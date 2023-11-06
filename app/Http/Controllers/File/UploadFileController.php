<?php

namespace App\Http\Controllers\File;

use App\Http\Requests\File\UploadFileRequest;

class UploadFileController extends FileController {
    public function __invoke(UploadFileRequest $request) {
        return $this->uploadFile($request);
    }
}
