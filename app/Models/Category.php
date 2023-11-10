<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema (
 *     schema="Category",
 *     @OA\Property (
 *         property="id",
 *         type="integer"
 *     ),
 *     @OA\Property (
 *         property="name",
 *         type="string"
 *     ),
 *     @OA\Property (
 *         property="description",
 *         type="string"
 *     )
 * )
 */
class Category extends Model
{
    use HasFactory;

    public function posts() {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
