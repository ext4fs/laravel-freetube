<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends BaseModel
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['thumb_id', 'name', 'type', 'path_to', 'md5_hash', 'width', 'height', 'size_kbytes', 'duration_secs'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function thumbnail() {
        return $this->belongsTo('File', 'thumb_id');
    }
}
