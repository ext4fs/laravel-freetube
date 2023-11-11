<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetTagsByPostIdRequest;
use App\Http\Requests\Tag\CreateTagRequest;
use App\Http\Requests\Tag\DeleteTagByIdRequest;
use App\Http\Requests\Tag\DeleteTagsRequest;
use App\Http\Requests\Tag\GetTagByIdRequest;
use App\Http\Requests\Tag\GetTagsRequest;
use App\Http\Requests\Tag\UpdateTagByIdRequest;
use App\Models\Post;
use App\Models\Tag;

/**
 * @OA\Tag(
 *     name="Tag",
 *     description="endpoints for interacting with tags",
 * )
 */
class TagController extends Controller
{
    public function getTags(GetTagsRequest $request) {
        $tags = Tag::all();
        return $tags;
    }

    public function getTagById(int $tagId, GetTagByIdRequest $request) {
        $tag = Tag::find($tagId);
        return $tag;
    }

    public function getTagsByPostId(int $postId, GetTagsByPostIdRequest $request) {
        $tags = Post::find($postId)->tags;
        return $tags;
    }

    public function createTag(CreateTagRequest $request) {
        $data = $request->input();
        $tag = Tag::create($data);
        return $tag;
    }

    public function updateTagById(int $tagId, UpdateTagByIdRequest $request) {
        $data = $request->input();
        $tag = Tag::find($tagId);
        $tag->update($data);
        return $tag;
    }

    public function deleteTags(DeleteTagsRequest $request) {
        $tags = Tag::truncate();
        return $tags;
    }

    public function deleteTagById(int $tagId, DeleteTagByIdRequest $request) {
        $tag = Tag::destroy($tagId);
        return $tag;
    }
}
