<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\CreateTagRequest;
use App\Http\Requests\Tag\UpdateTagRequest;
use App\Models\Post;
use App\Models\Tag;

/**
 * @OA\Tag(
 *     name="Tag",
 *     description="API endpoints for interacting with tags",
 * )
 */
class TagController extends Controller
{
    public function getTags() {
        $tags = Tag::all();
        return $tags;
    }

    public function getTagById(int $tagId) {
        $tag = Tag::find($tagId);
        return $tag;
    }

    public function getTagsByPostId(int $postId) {
        $tags = Post::find($postId)->tags;
        return $tags;
    }

    public function createTag(CreateTagRequest $request) {
        $data = $request->input();
        $tag = Tag::create($data);
        return $tag;
    }

    public function updateTagById(int $tagId, UpdateTagRequest $request) {
        $data = $request->input();
        $tag = Tag::find($tagId);
        $tag->update($data);
        return $tag;
    }

    public function deleteTags() {
        $tags = Tag::truncate();
        return $tags;
    }

    public function deleteTagById(int $tagId) {
        $tag = Tag::destroy($tagId);
        return $tag;
    }
}
