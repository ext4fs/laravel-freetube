<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @OA\Tag(
 *     name="Post",
 *     description="endpoints for interacting with posts",
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

    public function getPostsByAuthorId(string $userId) {
        $posts = Post::where('author_id', $userId)->get();
        return $posts;
    }

    public function getPostsByCategoryId(int $categoryId) {
        $posts = Post::where('category_id', $categoryId)->get();
        return $posts;
    }

    public function getPostsByTagId(int $tagId) {
        $posts = Tag::find($tagId)->posts;
        return $posts;
    }

    public function createPost(CreatePostRequest $request) {
        $data = $request->input();
        $post = Post::create($data);
        return $post;
    }

    public function updatePostById(int $postId, UpdatePostRequest $request) {
        $post = Post::find($postId);
        $user = $request->user();
        if (!$user->isAdmin() && !$user->can('update', $post)) {
            abort(403);
        }
        $data = $request->input();
        $post->update($data);
        return $post;
    }

    public function deletePosts(Request $request) {
        $user = $request->user();
        if (!$user->isAdmin()) {
            abort(403);
        }
        $posts = Post::truncate();
        return $posts;
    }

    public function deletePostById(Request $request, int $postId) {
        $post = Post::find($postId);
        $user = $request->user();
        if (!$user->isAdmin() && !$user->can('delete', $post)) {
            abort(403);
        }
        $post->delete();
        return $post;
    }

    public function deletePostsByAuthorId(string $userId) {
        if (Auth::id() != $userId) {
            abort(403);
        }
        $posts = Post::where('authorId', $userId)->delete();
        return $posts;
    }
}
