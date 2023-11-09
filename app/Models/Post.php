<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'category_id', 'title', 'description', 'likes', 'dislikes'];

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
