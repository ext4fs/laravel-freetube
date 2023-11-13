<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function getAny(User $user): bool {
        return true;
    }

    public function get(User $user, Post $post): bool {
        return true;
    }

    public function create(User $user): bool {
        return true;
    }

    public function update(User $user, Post $post): bool {
        return $user->is_admin || $user->id === $post->author_id;
    }

    public function delete(User $user, Post $post): bool {
        return $user->is_admin || $user->id === $post->author_id;
    }

    public function restore(User $user, Post $post): bool {
        //
    }

    public function forceDelete(User $user, Post $post): bool {
        //
    }
}
