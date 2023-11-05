<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $fillable = ["author_id", "title", "desc"];

    public function author() {
        return $this->belongsTo('users', 'author_id', 'id');
    }

    public function comments() {
        return $this->hasMany('comments', 'post_id', 'id');
    }
}
