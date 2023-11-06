<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\File\FileController;

class DeleteFilesController extends FileController {
    public function __invoke() {
        return $this->deleteFiles();
    }
}
