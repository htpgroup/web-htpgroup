<?php

namespace App\Services\Napas\Resources;

class Uptime extends ApiResource
{
    public string $datetime;

    public float $uptimePercentage;
}
