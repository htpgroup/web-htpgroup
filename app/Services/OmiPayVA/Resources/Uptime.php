<?php

namespace App\Services\OmiPayVA\Resources;

class Uptime extends ApiResource
{
    public string $datetime;

    public float $uptimePercentage;
}
