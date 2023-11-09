<?php

use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RefreshController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Comment\CreateCommentController;
use App\Http\Controllers\Comment\DeleteCommentByIdController;
use App\Http\Controllers\Comment\DeleteCommentsByAuthorIdController;
use App\Http\Controllers\Comment\DeleteCommentsByPostIdController;
use App\Http\Controllers\Comment\UpdateCommentByIdController;
use App\Http\Controllers\Comment\GetCommentByIdController;
use App\Http\Controllers\Comment\GetCommentsByAuthorIdController;
use App\Http\Controllers\Comment\GetCommentsByPostIdController;
use App\Http\Controllers\Comment\GetCommentsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\CreatePostController;
use App\Http\Controllers\Post\DeletePostByIdController;
use App\Http\Controllers\Post\DeletePostsByAuthorId;
use App\Http\Controllers\Post\DeletePostsController;
use App\Http\Controllers\Post\UpdatePostByIdController;
use App\Http\Controllers\Post\GetPostByIdController;
use App\Http\Controllers\Post\GetPostsByAuthorIdController;
use App\Http\Controllers\Post\GetPostsController;
use App\Http\Controllers\User\CreateUserController;
use App\Http\Controllers\User\DeleteUserByIdController;
use App\Http\Controllers\User\GetMeController;
use App\Http\Controllers\User\GetUserByIdController;
use App\Http\Controllers\User\GetUsersController;
use App\Http\Controllers\User\UpdateUserByIdController;
use App\Http\Controllers\File\DownloadFileByIdController;
use App\Http\Controllers\File\GetFileByIdController;
use App\Http\Controllers\File\GetFilesController;
use App\Http\Controllers\File\UploadFileController;
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

    Route::get('/', [Controller::class, 'getHello']);

    Route::prefix('auth')->group(function () {
        Route::post('/login', LogInController::class);
        Route::get('/logout', LogOutController::class);
        Route::post('/sign-up', SignUpController::class);
        Route::get('/refresh', RefreshController::class);
    });

    Route::prefix('users')->group(function() {
        Route::get('/', GetUsersController::class);
        Route::post('/', CreateUserController::class);
        Route::middleware('auth')->group(function () {
            Route::get('/me', GetMeController::class);
            Route::put('/{userId}', UpdateUserByIdController::class);
            Route::delete('/{userId}', DeleteUserByIdController::class);
            Route::delete('/{userId}/posts', DeletePostsByAuthorId::class);
            Route::delete('/{userId}/posts/{postId}/comments');
            Route::delete('/{userId}/comments', DeleteCommentsByAuthorIdController::class);
        });
        Route::get('/{userId}', GetUserByIdController::class);
        Route::get('/{userId}/posts', GetPostsByAuthorIdController::class);
        Route::get('/{userId}/comments', GetCommentsByAuthorIdController::class);
    })->where(['userId' => '^[0-9a-fA-F]{8}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{12}$', 'postId' => '^[0-9]+$']);

    Route::prefix('posts')->group(function() {
        Route::get('/', GetPostsController::class);
        Route::get('/{postId}', GetPostByIdController::class);
        Route::get('/{postId}/comments', GetCommentsByPostIdController::class);
        Route::middleware('auth')->group(function () {
            Route::post('/', CreatePostController::class);
            Route::put('/{postId}', UpdatePostByIdController::class);
            Route::delete('/', DeletePostsController::class);
            Route::delete('/{postId}', DeletePostByIdController::class);
            Route::delete('/{postId}/comments', DeleteCommentsByPostIdController::class);
        });
    })->where(['postId' => '^[0-9]+$']);

    Route::prefix('comments')->group(function() {
        Route::get('/', GetCommentsController::class);
        Route::get('/{commentId}', GetCommentByIdController::class);
        Route::middleware('auth')->group(function () {
            Route::post('/', CreateCommentController::class);
            Route::put('/{commentId}', UpdateCommentByIdController::class);
            Route::delete('/{commentId}', DeleteCommentByIdController::class);
        });
    })->where(['commentId' => '^[0-9]+$']);

    Route::prefix('/categories')->group(function () {
        Route::get('/');
        Route::get('/{categoryId}');
        Route::get('/{categoryId}/posts');
        Route::middleware('auth')->group(function () {
           Route::post('/');
           Route::put('/{categoryId}');
           Route::delete('/');
           Route::delete('/{categoryId}');
        });
    })->where(['categoryId' => '^[0-9]+$']);

    Route::prefix('/tags')->group(function () {
       Route::get('/');
       Route::get('/{tagId}');
       Route::middleware('auth')->group(function () {
            Route::post('/');
            Route::put('/{tagId}');
            Route::delete('/');
            Route::delete('/{tagId}');
       });
    })->where(['tagId' => '^[0-9]+$']);

    Route::prefix('files')->group(function () {
        Route::get('/', GetFilesController::class);
        Route::get('/{fileId}', GetFileByIdController::class);
        Route::middleware('auth')->group(function() {
            Route::get('/{fileId}/download', DownloadFileByIdController::class);
            Route::post('/upload', UploadFileController::class);
            Route::delete('/');
            Route::delete('/{fileId}');
        });
    })->where(['fileId' => '^[0-9a-fA-F]{8}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{12}$']);
});
