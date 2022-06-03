<?php

namespace App\Services\OhDear\Resources;

class Downtime extends ApiResource
{
    public string $startedAt;

    /** @var string */
    public ?string $endedAt;
}
