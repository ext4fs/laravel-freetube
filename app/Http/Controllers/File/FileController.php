<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\UploadFileRequest;
use App\Models\File;
use App\Models\Video;
use FFMpeg\Coordinate\TimeCode;
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

            return 'test';
        }
        //return $file;
    }

    public function downloadFileById(string $fileId) {
        $file = File::find($fileId);
        $path = $file->path;
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
