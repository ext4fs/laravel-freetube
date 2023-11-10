<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema (
 *     schema="Tag",
 *     @OA\Property (
 *       property="id",
 *       type="integer"
 *     ),
 *     @OA\Property (
 *         property="name",
 *         type="string"
 *     )
 * )
 *
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
