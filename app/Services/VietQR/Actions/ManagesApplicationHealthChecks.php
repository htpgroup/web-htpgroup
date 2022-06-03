<?php

namespace App\Services\VietQR\Actions;

use App\Services\VietQR\Resources\ApplicationHealthCheck;
use App\Services\VietQR\Resources\ApplicationHealthCheckResult;

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

    public function listTemplate(): array
    {
        $listTemplate = [
            'compact2',
            'compact',
            'qr_only'
        ];

        return $listTemplate;
    }
}
