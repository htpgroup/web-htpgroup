<?php

namespace App\Services\OmiPayVA\Actions;

use App\Services\OmiPayVA\Resources\Site;

/*
 * $sites = $omiPayVA->sites();
 * $omiPayVA->site($siteId);
 *
 * $omiPayVA->createSite([
   'url' => 'https://yourbrandnewsite.tld',
   'team_id' => $yourTeamId
]);
$omiPayVA->createSite([
   'url' => 'https://yourbrandnewsite.tld',
   'team_id' => $yourTeamId
   'checks' => ['uptime', 'mixed_content']
]);

$site->delete();
$omiPayVA->site($siteId)->startMaintenance($durationOfMaintenancePeriodInSeconds);
$omiPayVA->site($siteId)->stopMaintenance();
 * */

trait ManagesSites
{
    public function sites(): array
    {
        return $this->transformCollection(
            $this->get('sites')['data'],
            Site::class,
        );
    }

    public function site(int $siteId): Site
    {
        $siteAttributes = $this->get("sites/{$siteId}");

        return new Site($siteAttributes, $this);
    }

    public function siteByUrl(string $siteUrl): Site
    {
        $siteAttributes = $this->get("sites/url/{$siteUrl}");

        return new Site($siteAttributes, $this);
    }

    public function createSite(array $data): Site
    {
        $siteAttributes = $this->post('sites', $data);

        return new Site($siteAttributes, $this);
    }

    public function deleteSite(int $siteId)
    {
        $this->delete("sites/$siteId");
    }
}
