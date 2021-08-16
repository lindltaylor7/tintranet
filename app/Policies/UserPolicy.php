<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function profile(User $user, User $users)
    {
        if($user->id == $users->id)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
