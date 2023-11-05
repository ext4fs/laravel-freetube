<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Video\VideoController;

class GetVideosController extends VideoController {
    public function __invoke() {
        return $this->getVideos();
    }
}
