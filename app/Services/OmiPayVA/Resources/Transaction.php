<?php

namespace App\Services\OmiPayVA\Resources;

use App\Dictionaries\Domain\Merchant\PaymentType;
use App\Dictionaries\Domain\Merchant\StatusType;
use App\Dictionaries\Payment\TransactionStatus;
use Carbon\Carbon;

class Transaction extends ApiResource
{
    public int $id;
    public int $transLocalId;
    public int $transId;
    public int $condition;
    public int $status;
    public float $amount;
    public float $method;
    public string $partner;
    public string $merchantId;
    public string $accountVaType;

    public string $url;
    public string $accountVa;
    public string $receiver_fee;
    public string $timeUpdated;
    public string $merchantEmail;
    public string $timeCreated;
    public string $accountVaName;
    public string $payerEmail;
    public string $receiverEmail;
    public string $sender_fullname;
    public string $timePerformed;
    public string $orderDescription;
    public string $cashinId;
    public string $feeType;
    public string $type;
    public string $payerMobile;
    public string $senderEmail;
    public string $senderFee;
    public string $bankCode;
    public string $timeAuthorized;
    public string $receiver;
    public string $sender_email;
    public string $receiverFeeId;
    public string $freezingStatus;
    public string $timeEscrow;
    public string $orderCode;
    public string $paymentMethodId;
    public string $receiverFee;
    public string $complaintStatus;
    public string $cashoutStatus;
    public string $sender;
    public string $timeFinished;
    public string $orderId;
    public string $bankAccount;


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

        ];

        return $sample;
    }

    public function delete(): void
    {
        $this->omiPayVA->deleteSite($this->id);
    }

    public function getShowDate($type = 1)
    {
        $showDate = Carbon::createFromTimestamp($this->timeCreated)->format('d/m/Y');
        if ($type == 2) {
            $showDate = Carbon::createFromTimestamp($this->timeCreated)->format('H:i:s');
        }

        return $showDate;
    }

    public function getBankCode()
    {
        $bankCode = $this->bankCode;

        return $bankCode;
    }

    public function getBankAccount()
    {
        $dataBank = [
            "bank_code" => "",
            "account_number" => "",
            "payment_method_code" => "",
            "bank_id" => '',
            "account_name" => "",
            "bank_name" => " ",
            "method_code" => ""
        ];
        /*if ($this->bankAccount) {
            $dataBank = json_decode($this->bankAccount, true);
        } else {
            //dd($this->bankAccount);
        }*/

        //  dd($dataBank);

        return $dataBank;
    }

    public function getPaymenTypeText()
    {
        $allPaymentType = PaymentType::allItem();
        return $allPaymentType[$this->type];
    }

    public function getPaymenStatusText()
    {
        $allPaymentType = StatusType::allItem();
        return $allPaymentType[$this->status];
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
