<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema (
 *     schema="Post",
 *     @OA\Property (
 *         property="id",
 *         type="integer",
 *     ),
 *     @OA\Property (
 *         property="authorId",
 *         type="uuid",
 *     ),
 *     @OA\Property (
 *         property="categoryId",
 *         type="integer",
 *     ),
 *     @OA\Property (
 *         property="title",
 *         type="string",
 *     ),
 *     @OA\Property (
 *         property="description",
 *         type="string",
 *     ),
 *     @OA\Property (
 *         property="views",
 *         type="integer",
 *     ),
 *     @OA\Property (
 *         property="rating",
 *         type="integer",
 *     )
 * )
 *
 *
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'category_id', 'title', 'description', 'rating'];

    public function author() {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
