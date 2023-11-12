<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy {

    public function getAny(User $user): bool {
        return true;
    }

    public function get(User $user, Comment $comment): bool {
        return true;
    }


    public function create(User $user): bool {
        return true;
    }

    public function update(User $user, Comment $comment): bool {
        return $user->id === $comment->author_id;
    }

    public function delete(User $user, Comment $comment): bool {
        return $user->id === $comment->author_id;
    }

    public function restore(User $user, Comment $comment): bool {

    }

    public function forceDelete(User $user, Comment $comment): bool {

    }
}
