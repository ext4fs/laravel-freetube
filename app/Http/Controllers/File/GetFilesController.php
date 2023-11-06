<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\File\FileController;

class GetFilesController extends FileController {
    public function __invoke() {
        return $this->getFiles();
    }
}
