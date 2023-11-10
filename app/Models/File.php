<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema (
 *     schema="File",
 *     @OA\Property (
 *         property="id",
 *         type="uuid",
 *     ),
 *     @OA\Property (
 *         property="type",
 *         type="string"
 *     ),
 *     @OA\Property (
 *         property="path",
 *         type="string"
 *     ),
 *     @OA\Property (
 *         property="size",
 *         type="integer"
 *     ),
 *     @OA\Property (
 *         property="hash",
 *         type="string"
 *     )
 * )
 *
 */
class File extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ["name", "type", "path", "size", "hash"];
}
