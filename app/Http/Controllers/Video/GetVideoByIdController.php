<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Video\VideoController;

class GetVideoByIdController extends VideoController {
    public function __invoke(string $videoId) {
        return $this->getVideoById($videoId);
    }
}
