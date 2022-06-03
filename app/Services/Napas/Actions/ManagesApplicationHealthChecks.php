<?php

namespace App\Services\Napas\Actions;

use App\Services\Napas\Resources\ApplicationHealthCheck;
use App\Services\Napas\Resources\ApplicationHealthCheckResult;

trait ManagesApplicationHealthChecks
{
    public function applicationHealthChecks(int $siteId): array
    {
        return $this->transformCollection(
            $this->get("sites/{$siteId}/application-health-checks")['data'],
            ApplicationHealthCheck::class
        );
    }

    public function applicationHealthCheckResults(int $siteId, int $applicationHealthCheckId): array
    {
        return $this->transformCollection(
            $this->get("sites/{$siteId}/application-health-checks/{$applicationHealthCheckId}")['data'],
            ApplicationHealthCheckResult::class
        );
    }
}
