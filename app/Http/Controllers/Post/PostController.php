<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;

/**
 * @OA\Tag(
 *     name="Post",
 *     description="API endpoints for interacting with posts",
 * )
 */
class PostController extends Controller {

    public function getPosts() {
        $posts = Post::all();
        return $posts;
    }

    public function getPostById(int $postId) {
        $post = Post::find($postId);
        return $post;
    }

    public function getPostsByAuthorId(int $authorId) {
        $posts = Post::where('author_id', $authorId)->get();
        return $posts;
    }

    public function createPost(CreatePostRequest $request) {
        $data = $request->input();
        $post = Post::create($data);
        return $post;
    }

    public function updatePostById(int $postId, UpdatePostRequest $request) {
        $post = Post::find($postId);
        $data = $request->input();
        $post->update($data);
        return $post;
    }

    public function deletePosts() {
        $posts = Post::truncate();
        return $posts;
    }

    public function deletePostById(int $postId) {
        $post = Post::find($postId);
        $post->delete();
        return $post;
    }

    public function deletePostsByAuthorId(int $authorId) {
        $posts = Post::where('author_id', $authorId)->delete();
        return $posts;
    }
}
