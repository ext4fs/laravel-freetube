<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['thumb_id', 'name', 'type', 'path_to', 'md5_hash', 'width', 'height', 'size_kbytes', 'duration_secs'];
    protected $keyType = 'string';
    public $incrementing = false;
}
