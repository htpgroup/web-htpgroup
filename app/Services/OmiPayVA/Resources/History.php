<?php

namespace App\Services\OmiPayVA\Resources;

use App\Dictionaries\Domain\Merchant\AccountStatus;
use App\Dictionaries\Domain\Merchant\AccountType;
use App\Dictionaries\Domain\Merchant\ActiveType;
use App\Dictionaries\Domain\Merchant\ConditionType;
use App\Dictionaries\Domain\Merchant\MethodType;
use Carbon\Carbon;

class History extends ApiResource
{
    public int $id;
    public int $condition;
    public int $status;
    public float $amount;
    public float $method;
    public string $merchantId;
    public string $modifiedTime;
    public string $accountVaType;

    public string $preAmount;
    public string $newAmount;
    public string $timeUpdated;
    public string $account;
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
            "preAmount" => "500000",
            "id" => 324238,
            "newAmount" => "500000",
            "account" => "1000000000013",
            "status" => "0"
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
        return MethodType::get($this->method);
    }

    public function getShowActive()
    {
        return AccountStatus::getStatus($this->status);
    }

    public function getShowCondition()
    {
        return ConditionType::get($this->accountVaType);
    }

}
