<?php

namespace App\Services\VietQR\Resources;

class Template extends ApiResource
{
    public int $id;

    public string $name;

    public string $image;

    public function __construct(array $attributes, $ohDear = null)
    {
        parent::__construct($attributes, $ohDear);
    }
}
