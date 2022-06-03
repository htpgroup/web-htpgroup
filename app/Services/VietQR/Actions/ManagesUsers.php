<?php

namespace App\Services\VietQR\Actions;

use App\Services\VietQR\Resources\User;

trait ManagesUsers
{
    public function me(): User
    {
        $userAttributes = $this->get('me');

        return new User($userAttributes, $this);
    }
}
