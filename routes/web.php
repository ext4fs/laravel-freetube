<?php

use App\Http\Controllers\Comment\CreateCommentController;
use App\Http\Controllers\Comment\DeleteCommentByIdController;
use App\Http\Controllers\Comment\DeleteCommentsByAuthorIdController;
use App\Http\Controllers\Comment\DeleteCommentsByPostIdController;
use App\Http\Controllers\Comment\EditCommentByIdController;
use App\Http\Controllers\Comment\GetCommentByIdController;
use App\Http\Controllers\Comment\GetCommentsByAuthorIdController;
use App\Http\Controllers\Comment\GetCommentsByPostIdController;
use App\Http\Controllers\Comment\GetCommentsController;
use App\Http\Controllers\Media\DeleteMediaByIdController;
use App\Http\Controllers\Media\DownloadMediaByIdController;
use App\Http\Controllers\Media\GetMediaByIdController;
use App\Http\Controllers\Media\GetMediaByUploaderIdController;
use App\Http\Controllers\Media\GetMediaController;
use App\Http\Controllers\Media\UploadMediaController;
use App\Http\Controllers\Post\CreatePostController;
use App\Http\Controllers\Post\DeletePostByIdController;
use App\Http\Controllers\Post\DeletePostsByAuthorId;
use App\Http\Controllers\Post\EditPostByIdController;
use App\Http\Controllers\Post\GetPostByIdController;
use App\Http\Controllers\Post\GetPostsByAuthorIdController;
use App\Http\Controllers\Post\GetPostsController;
use App\Http\Controllers\User\DeleteUserByIdController;
use App\Http\Controllers\User\GetUserByIdController;
use App\Http\Controllers\User\GetUsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
