<?php

namespace App\Services\OmiPayVA\Resources;

use App\Dictionaries\Domain\Merchant\AccountStatus;
use App\Dictionaries\Domain\Merchant\AccountType;
use App\Dictionaries\Domain\Merchant\ActiveType;
use App\Dictionaries\Domain\Merchant\ConditionType;
use App\Dictionaries\Domain\Merchant\MethodType;
use Carbon\Carbon;

class Account extends ApiResource
{
    public string $id;
    public string $condition;
    public string $status;
    //3 khoá
    //1 đã tạo hoá đơn
    //2 đã thanh toán
    //3 đã nhận tiền

    public string $amount;
    public string $method;
    public string $merchantId;
    public string $accountVaType;
    public string $accountVaId;
    public string $va_account;

    public string $errorCode;
    public string $url;
    public string $message;

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
            "accountVa" => "",
            "va_account" => "",
            "amount" => "",
            "method" => '',
            "merchantEmail" => "",
            "accountVaType" => "",
            "condition" => "",
            "merchantId" => "12",
            "requestId" => "5260BC063BD843D208D76A63F4642A29",
            "timeUpdated" => time(),
            "accountVaName" => "",
            "timeCreated" => time(),
            "error_code" => 0,
            "id" => 1,
            "status" => "0"
        ];

        return $sample;
    }

    public function delete(): void
    {
        $this->omiPayVA->deleteSite($this->id);
    }

    public function getShowDate2()
    {
        $showDate = Carbon::createFromTimestamp($this->timeCreated)->format('d/m/Y');

        return $showDate;
    }

    public function getShowDateTime($format = 'd/m/Y')
    {
        $showDate = Carbon::createFromTimestamp($this->timeCreated)->format('h:i d/m/Y');

        return $showDate;
    }

    public function getShowDate($type = 1)
    {
        $showDate = Carbon::createFromTimestamp($this->timeCreated)->format('d/m/Y');
        if ($type == 2) {
            $showDate = Carbon::createFromTimestamp($this->timeCreated)->format('H:i:s');
        }

        return $showDate;
    }

    public function getShowType()
    {
        return AccountType::get($this->accountVaType);
    }

    //Kiểm tra có thể sửa tài khoản
    public function canEditAccount()
    {
        if ($this->status != 1 && $this->accountVaType == ConditionType::FIXED) {
            return false;
        }

        return true;
    }

    /*
     * Phương thức
     * */
    public function getShowMethod()
    {
        return MethodType::get($this->method);
    }

    /*
     * Trạng thái
     * 1. Hoạt động
     * 0. Khoá
     * */
    public function getShowActive()
    {
        if ($this->status == 1) {
            return 'Hoạt động';
        }

        return "Khoá";
    }

    /*
     * Điều kiện
     * 1. Cố định
     * 2. Tuỳ biến
     * */
    public function getShowCondition()
    {
        return ConditionType::get($this->condition);
    }

    public function getShowAccountName()
    {
        return $this->accountVa;
    }
}
