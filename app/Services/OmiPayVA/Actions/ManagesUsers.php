<?php

namespace App\Services\OmiPayVA\Actions;

use App\Services\OmiPayVA\Resources\User;

/*
 * $user = $omiPayVA->me();
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
