<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\UploadVideoRequest;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller  {

    public function getVideos() {
        $videos = Video::all();
        return $videos;
    }

    public function getVideoById(string $videoId) {
        $video = Video::find($videoId);
        return $video;
    }

    public function uploadVideo(UploadVideoRequest $request) {

    }

    public function downloadVideoById(string $videoId) {
        $video = Video::find($videoId);
        $path = $video->path;
        $contents = Storage::download($path);
        return $contents;
    }

    public function deleteVideos() {
        $videos = Video::truncate();
        return $videos;
    }

    public function deleteVideoById(string $videoId) {
        $video = Video::destroy($videoId);
        return $video;
    }

}
