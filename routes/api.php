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
use App\Http\Controllers\Video\DownloadVideoByIdController;
use App\Http\Controllers\Video\GetVideoByIdController;
use App\Http\Controllers\Video\GetVideosController;
use App\Http\Controllers\Video\UploadVideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function() {

    Route::prefix('users')->group(function() {
        Route::get('/', GetUsersController::class);
        Route::get('/{userId}', GetUserByIdController::class);
        Route::delete('/{userId}', DeleteUserByIdController::class);
        Route::get('/{userId}/posts', GetPostsByAuthorIdController::class);
        Route::delete('/{userId}/posts', DeletePostsByAuthorId::class);
        Route::get('/{userId}/comments', GetCommentsByAuthorIdController::class);
        Route::delete('/{userId}/comments', DeleteCommentsByAuthorIdController::class);
    });

    Route::prefix('posts')->group(function() {
        Route::get('/', GetPostsController::class);
        Route::get('/{postId}', GetPostByIdController::class);
        Route::post('/', CreatePostController::class);
        Route::put('/{postId}', EditPostByIdController::class);
        Route::delete('/{postId}', DeletePostByIdController::class);
        Route::get('/{postId}/comments', GetCommentsByPostIdController::class);
        Route::delete('/{postId}/comments', DeleteCommentsByPostIdController::class);
    });

    Route::prefix('comments')->group(function() {
        Route::get('/', GetCommentsController::class);
        Route::get('/{commentId}', GetCommentByIdController::class);
        Route::post('/', CreateCommentController::class);
        Route::put('/{commentId}', EditCommentByIdController::class);
        Route::delete('/{commentId}', DeleteCommentByIdController::class);
    });

    Route::prefix('videos')->group(function () {
        Route::get('/', GetVideosController::class);
        Route::get('/{videoId}', GetVideoByIdController::class);
        Route::get('/{videoId}/download', DownloadVideoByIdController::class);
        Route::post('/upload', UploadVideoController::class);
    });
});
