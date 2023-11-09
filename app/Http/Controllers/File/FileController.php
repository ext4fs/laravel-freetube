<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\UploadFileRequest;
use App\Models\File;

use getID3;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;
use Imagick;

/**
 * @OA\Tag(
 *     name="File",
 *     description="API endpoints for interacting with files"
 * )
 */
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
        $contents = $request->file('file');
        $hash = md5($contents->getContent());
        if ($file = File::where('md5_hash', $hash)->first()) {
            return $file;
        }
        if ($contents->isValid()) {
            $type = $contents->getMimeType();
            $isVideo = preg_match('/^video\/.*$/', $type);
            $isImage = preg_match('/^image\/.*$/', $type);
            if (!($isVideo ^ $isImage)) {
                return response()->json([
                    "error" => "invalid file type"
                ]);
            }
            $path = $contents->storeAs($isVideo ? 'videos' : 'images', $contents->hashName());
            $name = $contents->getClientOriginalName();
            $size = ceil($contents->getSize() / 1024);
            $data = [
                'name' => $name,
                'path_to' => $path,
                'type' => $type,
                'md5_hash' => $hash,
                'size_kbytes' => $size
            ];
            if ($isVideo) {
                $id3 = new getID3();
                $info = $id3->analyze($contents->getRealPath());
                $data['duration_secs'] = ceil($info['playtime_seconds']);
                $data['width'] = $info['video']['resolution_y'];
                $data['height'] = $info['video']['resolution_x'];
            } else {
                $data['width'] = 0;
                $data['height'] = 0;
            }
            $file = File::create($data);
            return $file;
        }
        return -1;
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
