<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CreateCommentRequest;
use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Models\Comment;

/**
 * @OA\Tag(
 *     name="Comment",
 *     description="API endpoints for interacting with comments",
 * )
 */
class CommentController extends Controller {

    public function getComments() {
        $comments = Comment::all();
        return $comments;
    }

    public function getCommentById(int $commentId) {
        $comment = Comment::find($commentId);
        return $comment;
    }

    public function getCommentsByPostId(int $postId) {
        $comments = Comment::where('postId', $postId)->get();
        return $comments;
    }

    public function getCommentsByAuthorId(string $authorId) {
        $comments = Comment::where('authorId', $authorId)->get();
        return $comments;
    }

    public function createComment(CreateCommentRequest $request) {
        $data = $request->input();
        $comment = Comment::create($data);
        return $comment;
    }

    public function updateCommentById(int $commentId, UpdateCommentRequest $request) {
        $comment = Comment::find($commentId);
        $data = $request->input();
        $comment->update($data);
        return $comment;
    }

    public function deleteComments() {
        $comments = Comment::truncate();
        return $comments;
    }

    public function deleteCommentsByPostId(int $postId) {
        $comments = Comment::where('postId', $postId)->delete();
        return $comments;
    }

    public function deleteCommentsByAuthorId(int $userId) {
        $comments = Comment::where('authorId', $userId)->delete();
        return $comments;
    }

    public function deleteCommentsByPostIdAndAuthorId(int $postId, string $userId) {

    }

    public function deleteCommentById(int $commentId) {
        $comment = Comment::destroy($commentId);
        return $comment;
    }
}
