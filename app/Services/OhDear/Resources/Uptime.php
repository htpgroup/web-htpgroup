<?php

namespace App\Services\OhDear\Resources;

class Uptime extends ApiResource
{
    public string $datetime;

    public float $uptimePercentage;
}
