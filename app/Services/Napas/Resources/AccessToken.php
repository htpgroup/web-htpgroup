<?php

namespace App\Services\Napas\Resources;

class AccessToken extends ApiResource
{
    public int $id;

    public string $token;

    public string $refresh_token;

    public string $expires_in;

    public string $scope;

    public function __construct(array $attributes, $ohDear = null)
    {
        parent::__construct($attributes, $ohDear);
    }

    public function oauth(): array
    {
        return $this->ohDear->mixedContent($this->id);
    }
}
