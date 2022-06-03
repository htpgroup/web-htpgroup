<?php

namespace App\Services\Napas\Resources;

class MaintenancePeriod extends ApiResource
{
    public int $id;

    public int $siteId;

    public string $startsAt;

    public ?string $endsAt;
}
