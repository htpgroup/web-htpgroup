<?php

namespace App\Services\Napas\Actions;

use App\Services\Napas\Resources\Site;
use App\Services\Napas\Resources\Payment;

trait ManagesPayments
{
    public function payments(): array
    {
        return $this->transformCollection(
            $this->get('sites')['data'],
            Site::class,
        );
    }

    public function payment(int $siteId): Site
    {
        $siteAttributes = $this->get("sites/{$siteId}");

        return new Payment($siteAttributes, $this);
    }

    public function paymentByUrl(string $siteUrl): Site
    {
        $siteAttributes = $this->get("sites/url/{$siteUrl}");

        return new Payment($siteAttributes, $this);
    }

    public function createPayment(array $data): Site
    {
        $siteAttributes = $this->post('sites', $data);

        return new Payment($siteAttributes, $this);
    }

    public function deletePayment(int $siteId)
    {
        $this->delete("sites/$siteId");
    }
}
