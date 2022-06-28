<?php

namespace App\Services\Napas\Actions;

use App\Services\Napas\Resources\Site;
use App\Services\Napas\Resources\User;

trait ManagesUsers
{
    public function me(): User
    {
        $userAttributes = $this->get('me');

        return new User($userAttributes, $this);
    }

    /*
     * Oatuh
     * {
        "access_token": "25bc25d1-565d-462f-928c-b73dc0514bcf",
        "token_type": "bearer",
        "refresh_token": "20ea2801-30d0-4a1a-b54f-e92a07041cc3",
        "expires_in": 300,
        "scope": "read write trust"
        }
     * */
    public function oauth()
    {
        $dataSend = [
            'grant_type' => 'password',
            'client_id' => 'APITEST',
            'client_secret' => 'TT3F6AM5UQZXJEJXAWJ8CHVC9ZJ02A51',
            'username' => 'apitest',
            'password' => 'fPJFVp5qnCWeFmtd',

        ];
        $siteAttributes = $this->post('oauth/token', $dataSend);

        return new Site($siteAttributes, $this);
    }
}
