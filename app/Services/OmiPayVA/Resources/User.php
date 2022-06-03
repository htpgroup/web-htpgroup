<?php

namespace App\Services\OmiPayVA\Resources;

class User extends ApiResource
{
    public int $id;

    public string $name;

    public string $email;

    public string $photoUrl;

    /** @var Team[] */
    public array $teams;

    public function __construct(array $attributes, $omiPayVA = null)
    {
        parent::__construct($attributes, $omiPayVA);

        $this->teams = array_map(function (array $teamAttributes) {
            return new Team($teamAttributes);
        }, $this->teams);
    }
}
