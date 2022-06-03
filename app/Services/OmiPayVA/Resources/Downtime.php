<?php

namespace App\Services\OmiPayVA\Resources;

class Downtime extends ApiResource
{
    public string $startedAt;

    /** @var string */
    public ?string $endedAt;
}
