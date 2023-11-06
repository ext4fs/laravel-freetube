<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\File\FileController;

class DownloadFileByIdController extends FileController {
    public function __invoke(string $fileId) {
        return $this->downloadFileById($fileId);
    }
}
