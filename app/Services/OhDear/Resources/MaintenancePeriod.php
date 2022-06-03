<?php

namespace App\Services\OhDear\Resources;

class MaintenancePeriod extends ApiResource
{
    public int $id;

    public int $siteId;

    public string $startsAt;

    public ?string $endsAt;
}
