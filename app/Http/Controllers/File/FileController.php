<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\UploadFileRequest;
use App\Models\File;
use App\Models\Video;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class FileController extends Controller  {

    public function getFiles() {
        $files = File::all();
        return $files;
    }

    public function getFileById(string $fileId) {
        $file = File::find($fileId);
        return $file;
    }

    public function uploadFile(UploadFileRequest $request) {
        $contents = $request->file('video');
        if ($contents->isValid()) {
            $timestamp = now()->getTimestampMs();
            $tmpPath = $contents->getRealPath();
            $cmd = Process::run('file -i '. $tmpPath);
            $output = $cmd->output();
            $pattern = "{^(.*):\s+(?P<type>\w+)\/(?P<extension>\w+)}";
            preg_match($pattern, $output, $matches);
            $type = $matches['type'];
            $extension = $matches['extension'];
            $cmd = Process::run('ffprobe -v error -select_streams v -show_entries stream=width,height,duration -of csv=p=0:s=x ' . $tmpPath);
            $output = $cmd->output();
            [$width, $height, $duration] = preg_split('{x}', $output);
            $store_to = 'other';
            if ($type == 'video') {
                $store_to = 'videos';
            }
            if ($type == 'image') {
                $store_to = 'images';
            }
            $path = $contents->storeAs($store_to, $timestamp . '.' . $extension);
            $name = $contents->getClientOriginalName();
            $size = ceil($contents->getSize() / 1024);
            $hash = md5($contents->getContent());
            $file = File::create(
                [
                    'name' => $name,
                    'path_to' => $path,
                    'type' => $type,
                    'md5_hash' => $hash,
                    'width' => $width,
                    'height' => $height,
                    'size_kbytes' => $size
                ]
            );
        }
        return $file;
    }

    public function downloadFileById(string $fileId) {
        $file = File::find($fileId);
        $path = $file->path_to;
        $contents = Storage::download($path);
        return $contents;
    }

    public function deleteFiles() {
        $file = File::truncate();
        return $file;
    }

    public function deleteFileById(string $fileId) {
        $file = File::destroy($fileId);
        return $file;
    }

}
