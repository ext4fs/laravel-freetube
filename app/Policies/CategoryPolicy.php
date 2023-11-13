<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    public function getAny(User $user): bool {
        return true;
    }

    public function get(User $user, Category $category): bool {
        return true;
    }

    public function create(User $user): bool {
        return $user->is_admin;
    }

    public function update(User $user, Category $category): bool {
        return $user->is_admin;
    }

    public function delete(User $user, Category $category): bool {
        return $user->is_admin;
    }

    public function restore(User $user, Category $category): bool
    {
        //
    }

    public function forceDelete(User $user, Category $category): bool
    {
        //
    }
}
