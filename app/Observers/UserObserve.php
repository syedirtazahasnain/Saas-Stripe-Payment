<?php

namespace App\Observers;

use App\Models\User;

class UserObserve
{
    public function creating(User $user)
    {
        $user->available_credits = 10;
    }
}