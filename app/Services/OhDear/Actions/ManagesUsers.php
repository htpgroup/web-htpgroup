<?php

namespace App\Services\OhDear\Actions;

use App\Services\OhDear\Resources\User;

/*
 * $user = $ohDear->me();
 * $teams = $user->teams;
 * */

trait ManagesUsers
{
    public function me(): User
    {
        $userAttributes = $this->get('me');

        return new User($userAttributes, $this);
    }
}
