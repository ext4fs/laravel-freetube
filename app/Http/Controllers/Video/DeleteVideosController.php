<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Video\VideoController;

class DeleteVideosController extends VideoController {
    public function __invoke() {
        return $this->deleteVideos();
    }
}
