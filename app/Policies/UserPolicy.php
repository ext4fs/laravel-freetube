<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function getAny(User $user): bool {
        return true;
    }

    public function get(User $user, User $model): bool {
        return true;
    }

    public function create(User $user): bool {
        return $user->is_admin;
    }

    public function update(User $user, User $model): bool {
        return $user->is_admin || $user->id === $model->id;
    }

    public function delete(User $user, User $model): bool {
        return $user->is_admin || $user->id === $model->id;
    }

    public function restore(User $user, User $model): bool {
        //
    }

    public function forceDelete(User $user, User $model): bool {
        //
    }
}
