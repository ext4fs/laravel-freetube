<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema (
 *     schema="Comment",
 *     @OA\Property (
 *         property="id",
 *         type="integer"
 *     ),
 *     @OA\Property (
 *          property="postId",
 *          type="integer"
 *      ),
 *     @OA\Property (
 *         property="authorId",
 *         type="uuid"
 *     ),
 *     @OA\Property (
 *         property="message",
 *         type="string"
 *     ),
 *     @OA\Property (
 *         property="rating",
 *         type="integer",
 *     )
 * )
 *
 *
 */
class Comment extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
    public function post() {
        return $this->belongsTo(User::class, 'post_id', 'id');
    }
}
