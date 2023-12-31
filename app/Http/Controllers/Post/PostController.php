<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\DeletePostByIdRequest;
use App\Http\Requests\Post\DeletePostsByAuthorIdRequest;
use App\Http\Requests\Post\DeletePostsRequest;
use App\Http\Requests\Post\GetPostByIdRequest;
use App\Http\Requests\Post\GetPostsByAuthorIdRequest;
use App\Http\Requests\Post\GetPostsByCategoryIdRequest;
use App\Http\Requests\Post\GetPostsByTagIdRequest;
use App\Http\Requests\Post\GetPostsRequest;
use App\Http\Requests\Post\UpdatePostByIdRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

/**
 * @OA\Tag(
 *     name="Post",
 *     description="endpoints for interacting with posts",
 * )
 * @OA\Schema(
 *    schema="PostId",
 *    type="integer",
 *    format="uint32",
 *    description="the unique identifier of post"
 *  )
 * @OA\Parameter(
 *     parameter="postId",
 *     name="postId",
 *     description="the idenfifier of a post in urlpath",
 *     @OA\Schema(
 *      ref="#/components/schemas/PostId",
 *     ),
 *     in="path",
 *     required=true
 *   )
 */
class PostController extends Controller {

    public function getPosts(GetPostsRequest $request) {
        $posts = Post::all();
        return $posts;
    }

    public function getPostById(int $postId, GetPostByIdRequest $request) {
        $post = Post::find($postId);
        return $post;
    }

    public function getPostsByAuthorId(string $authorId, GetPostsByAuthorIdRequest $request) {
        $posts = User::find($authorId)->posts;
        return $posts;
    }

    public function getPostsByCategoryId(int $categoryId, GetPostsByCategoryIdRequest $request) {
        $posts = Category::find($categoryId)->posts;
        return $posts;
    }

    public function getPostsByTagId(int $tagId, GetPostsByTagIdRequest $request) {
        $posts = Tag::find($tagId)->posts;
        return $posts;
    }

    public function createPost(CreatePostRequest $request) {
        $data = $request->validated();
        $data['author_id'] = auth()->id();
        $post = Post::create($data);
        return $post;
    }

    public function updatePostById(int $postId, UpdatePostByIdRequest $request) {
        $post = Post::find($postId);
        $data = $request->validated();
        $post->update($data);
        return $post;
    }

    public function deletePosts(DeletePostsRequest $request) {
        $posts = Post::truncate();
        return $posts;
    }

    public function deletePostById(int $authorId, DeletePostByIdRequest $request) {
        $post = Post::find($authorId);
        $post->delete();
        return $post;
    }

    public function deletePostsByAuthorId(string $authorId, DeletePostsByAuthorIdRequest $request) {
        $posts = User::find($authorId)->posts;
        $posts->delete();
        return $posts;
    }
}
