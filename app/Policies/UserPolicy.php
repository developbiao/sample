<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    // Only current user is self can update
    public function update(User $currentUser, User $user)
    {
      return $currentUser->id === $user->id;
    }

    // Only current user can delete user and can'not delete self
    public function destroy(User $currentUser, User $user)
    {
      return $currentUser->is_admin && $currentUser->id !== $user->id;

    }
}
