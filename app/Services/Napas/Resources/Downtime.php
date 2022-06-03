<?php

namespace App\Services\Napas\Resources;

class Downtime extends ApiResource
{
    public string $startedAt;

    /** @var string */
    public ?string $endedAt;
}
