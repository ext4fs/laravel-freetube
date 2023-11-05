<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CreateCommentRequest;
use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Models\Comment;

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
        $comments = Comment::where('post_id', $postId)->get();
        return $comments;
    }

    public function getCommentsByAuthorId(int $authorId) {
        $comments = Comment::where('author_id', $authorId)->get();
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
        $comments = Comment::where('post_id', $postId)->delete();
        return $comments;
    }

    public function deleteCommentsByAuthorId(int $authorId) {
        $comments = Comment::where('author_id', $authorId)->delete();
        return $comments;
    }


    public function deleteCommentById(int $commentId) {
        $comment = Comment::destroy($commentId);
        return $comment;
    }
}
