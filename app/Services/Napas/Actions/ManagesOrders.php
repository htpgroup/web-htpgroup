<?php

namespace App\Services\Napas\Actions;

use App\Services\Napas\Resources\Site;
use App\Services\Napas\Resources\Order;

trait ManagesOrders
{
    public function orders(): array
    {
        return $this->transformCollection(
            $this->get('sites')['data'],
            Site::class,
        );
    }

    public function order(int $siteId): Site
    {
        $siteAttributes = $this->get("sites/{$siteId}");

        return new Order($siteAttributes, $this);
    }

    public function orderByUrl(string $siteUrl): Site
    {
        $siteAttributes = $this->get("sites/url/{$siteUrl}");

        return new Order($siteAttributes, $this);
    }

    public function createOrder(array $data): Site
    {
        $siteAttributes = $this->post('sites', $data);

        return new Order($siteAttributes, $this);
    }

    public function deleteOrder(int $siteId)
    {
        $this->delete("sites/$siteId");
    }
}
