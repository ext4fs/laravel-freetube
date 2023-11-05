<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Video\VideoController;

class DeleteVideoByIdController extends VideoController {
    public function __invoke(string $videoId) {
       return $this->deleteVideoById($videoId);
    }
}
