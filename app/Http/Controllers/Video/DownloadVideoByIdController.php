<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Video\VideoController;

class DownloadVideoByIdController extends VideoController {
    public function __invoke(string $videoId) {
        return $this->downloadVideoById($videoId);
    }
}
