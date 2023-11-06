<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\File\FileController;

class GetFileByIdController extends FileController {
    public function __invoke(string $fileId) {
        return $this->getFileById($fileId);
    }
}
