<?php

namespace App\Policies;

use App\Models\Publication;
use App\Models\User;

class PublicationPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        
    }

    public function update(?User $user, Publication $publication): bool
    {
        if(isset($user) && $user->id == $publication->author->id)
        {
            return true;
        }
        return false;
    }

    public function destroy(?User $user, Publication $publication): bool
    {
        if(isset($user) && $user->id == $publication->author->id)
        {
            return true;
        }
        return false;
    }
}
