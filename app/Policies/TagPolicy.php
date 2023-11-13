<?php

namespace App\Policies;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TagPolicy
{
    public function getAny(User $user): bool {
        return true;
    }

    public function get(User $user, Tag $tag): bool {
        return true;
    }

    public function create(User $user): bool {
        return true;
    }

    public function update(User $user, Tag $tag): bool {
        return $user->is_admin;
    }

    public function delete(User $user, Tag $tag): bool {
        return $user->is_admin;
    }

    public function deleteAny(User $user): bool {
        return $user->is_admin;
    }

    public function restore(User $user, Tag $tag): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tag $tag): bool
    {
        //
    }
}
