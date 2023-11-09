<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{

    public function viewAny(User $user): bool
    {
        return true;
    }


    public function view(User $user, Post $post): bool
    {
        return true;
    }


    public function create(User $user): bool
    {
        return true;
    }


    public function update(User $user, Post $post): bool
    {
        return $user->id === $post->author_id ? Response::allow() : Response::deny('You don\'t owner of this post');
    }


    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->author_id ? Response::allow() : Response::deny('You don\'t owner of this post');
    }


    public function restore(User $user, Post $post): bool
    {
        return  $user->id === $post->author_id ? Response::allow() : Response::deny('You don\'t owner of this post');
    }


    public function forceDelete(User $user, Post $post): bool
    {
        return  $user->id === $post->author_id ? Response::allow() : Response::deny('You don\'t owner of this post');
    }
}
