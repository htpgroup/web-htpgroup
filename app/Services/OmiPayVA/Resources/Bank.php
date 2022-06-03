<?php

namespace App\Services\OmiPayVA\Resources;

use App\Dictionaries\Domain\Merchant\AccountType;
use App\Dictionaries\Domain\Merchant\ConditionType;
use App\Dictionaries\Domain\Merchant\MethodType;
use Carbon\Carbon;

class Bank extends ApiResource
{
    public int $id;
    public int $condition;
    public int $status;
    public float $amount;
    public float $method;
    public string $merchantId;
    public string $accountVaType;

    public string $url;
    public string $accountVa;
    public string $timeUpdated;
    public string $merchantEmail;
    public string $timeCreated;
    public string $accountVaName;

    /**
     * The checks of a site.
     *
     * @var Check[]
     */
    public array $checks;

    public string $sortUrl;

    public function __construct(array $attributes, $omiPayVA = null)
    {
        //dd($attributes);
        if (empty($attributes)) {
            $attributes = $this->sampleData();
        }
        parent::__construct($attributes, $omiPayVA);
        /* $this->checks = array_map(function (array $checkAttributes) use ($omiPayVA) {
             return new Check($checkAttributes, $omiPayVA);
         }, $this->checks);*/
    }

    public function sampleData()
    {
        $sample = [
            "accountVa" => "OMIPAY124014u0245",
            "amount" => "500000",
            "method" => "1",
            "merchantEmail" => "abc@gmail.com",
            "accountVaType" => "1",
            "condition" => "1",
            "merchantId" => "121442",
            "requestId" => "5260BC063BD843D208D76A63F4642A29",
            "timeUpdated" => "1644829316",
            "accountVaName" => "Nguyen Van A",
            "timeCreated" => "1644829316",
            "error_code" => 0,
            "id" => 1,
            "status" => "1"
        ];

        return $sample;
    }

    public function delete(): void
    {
        $this->omiPayVA->deleteSite($this->id);
    }

    public function getShowDate()
    {
        $showDate = Carbon::createFromTimestamp($this->timeCreated)->format('d/m/Y');

        return $showDate;
    }

    public function getShowType()
    {
        return AccountType::get($this->accountVaType);
    }

    public function getShowMethod()
    {
        return MethodType::get($this->accountVaType);
    }


    public function getShowCondition()
    {
        return ConditionType::get($this->accountVaType);
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
     * @param string $startedAt Must be in format Ymdhis
     * @param string $endedAt Must be in format Ymdhis
     * @param string $split Use hour, day or month
     *
     * @return array
     */
    public function uptime(string $startedAt, string $endedAt, string $split): array
    {
        return $this->omiPayVA->uptime($this->id, $startedAt, $endedAt, $split);
    }

    /**
     * Get the downtime periods for a site.
     *
     * @param string $startedAt Must be in format Ymdhis
     * @param string $endedAt Must be in format Ymdhis
     *
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
    ): array
    {
        return $this->omiPayVA->performanceRecords($this->id, $start, $end, $timeframe, $sort);
    }
}
