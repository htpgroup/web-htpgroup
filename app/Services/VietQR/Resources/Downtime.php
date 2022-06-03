<?php

namespace App\Services\VietQR\Resources;

class Downtime extends ApiResource
{
    public string $startedAt;

    /** @var string */
    public ?string $endedAt;
}
