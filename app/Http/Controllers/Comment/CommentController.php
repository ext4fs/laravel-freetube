<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CreateCommentRequest;
use App\Http\Requests\Comment\DeleteCommentByIdRequest;
use App\Http\Requests\Comment\DeleteCommentsRequest;
use App\Http\Requests\Comment\GetCommentByIdRequest;
use App\Http\Requests\Comment\GetCommentsByAuthorIdRequest;
use App\Http\Requests\Comment\GetCommentsByPostIdRequest;
use App\Http\Requests\Comment\GetCommentsRequest;
use App\Http\Requests\Comment\UpdateCommentByIdRequest;
use App\Http\Requests\DeleteCommentsByAuthorIdRequest;
use App\Http\Requests\DeleteCommentsByPostIdRequest;
use App\Models\Comment;

/**
 * @OA\Tag(
 *     name="Comment",
 *     description="endpoints for interacting with comments",
 * )
 */
class CommentController extends Controller {

    public function getComments(GetCommentsRequest $request) {
        $comments = Comment::all();
        return $comments;
    }

    public function getCommentById(int $commentId, GetCommentByIdRequest $request) {
        $comment = Comment::find($commentId);
        return $comment;
    }

    public function getCommentsByPostId(int $postId, GetCommentsByPostIdRequest $request) {
        $comments = Comment::where('post_id', $postId)->get();
        return $comments;
    }

    public function getCommentsByAuthorId(string $authorId, GetCommentsByAuthorIdRequest $request) {
        $comments = Comment::where('author_id', $authorId)->get();
        return $comments;
    }

    public function createComment(CreateCommentRequest $request) {
        $data = $request->input();
        $comment = Comment::create($data);
        return $comment;
    }

    public function updateCommentById(int $commentId, UpdateCommentByIdRequest $request) {
        $comment = Comment::find($commentId);
        $data = $request->input();
        $comment->update($data);
        return $comment;
    }

    public function deleteComments(DeleteCommentsRequest $request) {
        $comments = Comment::truncate();
        return $comments;
    }

    public function deleteCommentsByPostId(int $postId, DeleteCommentsByPostIdRequest $request) {
        $comments = Comment::where('post_id', $postId)->delete();
        return $comments;
    }

    public function deleteCommentsByAuthorId(int $userId, DeleteCommentsByAuthorIdRequest $request) {
        $comments = Comment::where('author_id', $userId)->delete();
        return $comments;
    }

    public function deleteCommentsByPostIdAndAuthorId(int $postId, string $userId, DeleteCommentsByAuthorIdRequest $request) {
        $comments = Comment::where('post_id', $postId)->where('author_id', $userId)->delete();
        return $comments;
    }

    public function deleteCommentById(int $commentId, DeleteCommentByIdRequest $request) {
        $comment = Comment::destroy($commentId);
        return $comment;
    }
}
