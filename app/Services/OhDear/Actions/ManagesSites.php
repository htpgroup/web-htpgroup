<?php

namespace App\Services\OhDear\Actions;

use App\Services\OhDear\Resources\Site;

/*
 * $sites = $ohDear->sites();
 * $ohDear->site($siteId);
 *
 * $ohDear->createSite([
   'url' => 'https://yourbrandnewsite.tld',
   'team_id' => $yourTeamId
]);
$ohDear->createSite([
   'url' => 'https://yourbrandnewsite.tld',
   'team_id' => $yourTeamId
   'checks' => ['uptime', 'mixed_content']
]);

$site->delete();
$ohDear->site($siteId)->startMaintenance($durationOfMaintenancePeriodInSeconds);
$ohDear->site($siteId)->stopMaintenance();
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
