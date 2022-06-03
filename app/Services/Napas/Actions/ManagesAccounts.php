<?php

namespace App\Services\Napas\Actions;

use App\Services\Napas\Resources\Site;
use App\Services\Napas\Resources\Account;

trait ManagesAccounts
{
    public function accounts(): array
    {
        return $this->transformCollection(
            $this->get('sites')['data'],
            Site::class,
        );
    }

    public function account(int $siteId): Site
    {
        $siteAttributes = $this->get("sites/{$siteId}");

        return new Account($siteAttributes, $this);
    }

    public function accountByUrl(string $siteUrl): Site
    {
        $siteAttributes = $this->get("sites/url/{$siteUrl}");

        return new Account($siteAttributes, $this);
    }

    public function createSite(array $data): Site
    {
        $siteAttributes = $this->post('sites', $data);

        return new Account($siteAttributes, $this);
    }

    public function deleteSite(int $siteId)
    {
        $this->delete("sites/$siteId");
    }
}
