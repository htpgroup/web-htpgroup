<?php

namespace App\Services\OmiPayVA\Resources;

class Site extends ApiResource
{
    public int $id;

    public string $url;

    /**
     * The checks of a site.
     *
     * @var Check[]
     */
    public array $checks;

    public string $sortUrl;

    public function __construct(array $attributes, $omiPayVA = null)
    {
        parent::__construct($attributes, $omiPayVA);

        $this->checks = array_map(function (array $checkAttributes) use ($omiPayVA) {
            return new Check($checkAttributes, $omiPayVA);
        }, $this->checks);
    }

    public function delete(): void
    {
        $this->omiPayVA->deleteSite($this->id);
    }

    public function startMaintenance(int $stopMaintenanceAfterSeconds = 60 * 60): void
    {
        $this->omiPayVA->startSiteMaintenance($this->id, $stopMaintenanceAfterSeconds);
    }

    public function stopMaintenance(): void
    {
        $this->omiPayVA->stopSiteMaintenance($this->id);
    }

    public function brokenLinks(): array
    {
        return $this->omiPayVA->brokenLinks($this->id);
    }

    public function mixedContent(): array
    {
        return $this->omiPayVA->mixedContent($this->id);
    }

    /**
     * Get the uptime percentages for a site.
     *
     * @param  string  $startedAt Must be in format Ymdhis
     * @param  string  $endedAt Must be in format Ymdhis
     * @param  string  $split Use hour, day or month
     * @return array
     */
    public function uptime(string $startedAt, string $endedAt, string $split): array
    {
        return $this->omiPayVA->uptime($this->id, $startedAt, $endedAt, $split);
    }

    /**
     * Get the downtime periods for a site.
     *
     * @param  string  $startedAt Must be in format Ymdhis
     * @param  string  $endedAt Must be in format Ymdhis
     * @return array
     */
    public function downtime(string $startedAt, string $endedAt): array
    {
        return $this->omiPayVA->downtime($this->id, $startedAt, $endedAt);
    }

    public function certificateHealth(): CertificateHealth
    {
        return $this->omiPayVA->certificateHealth($this->id);
    }

    public function cronChecks()
    {
        return $this->omiPayVA->cronChecks($this->id);
    }

    public function syncCronChecks(array $cronCheckAttributes): array
    {
        return $this->omiPayVA->syncCronChecks($this->id, $cronCheckAttributes);
    }

    public function performanceRecords(
        string $start,
        string $end,
        string $timeframe = '1m',
        string $sort = '-created_at'
    ): array {
        return $this->omiPayVA->performanceRecords($this->id, $start, $end, $timeframe, $sort);
    }
}
