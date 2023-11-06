<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\File\FileController;

class DeleteFileByIdController extends FileController {
    public function __invoke(string $fileId) {
       return $this->deleteFileById($fileId);
    }
}
