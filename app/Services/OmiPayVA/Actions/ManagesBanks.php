<?php

namespace App\Services\OmiPayVA\Actions;

use App\Services\OmiPayVA\Resources\Site;
use App\Services\OmiPayVA\Resources\Bank;

/*
 * $banks = $omiPayVA->banks();
 * $omiPayVA->Bank($bankID);
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
$omiPayVA->Bank($bankID)->startMaintenance($durationOfMaintenancePeriodInSeconds);
$omiPayVA->Bank($bankID)->stopMaintenance();
 * */

trait ManagesBanks
{
    public function banks(array $data = []): array
    {
        return $this->transformCollection(
            $this->get('getVaAccountList&data=' . json_encode($data) . '&language=vi')['data'],
            Bank::class,
        );
    }

    public function bank(int $bankID, array $data = []): Bank
    {
        $siteAttributes = $this->get("getVaAccountByID&data=" . json_encode($data) . '&language=vi');

        return new Bank($siteAttributes, $this);
    }

    public function historyBank(int $bankID, array $data = []): Account
    {
        $siteAttributes = $this->get("getVaAccountHistoryList&data=" . json_encode($data) . '&language=vi');

        return new Bank($siteAttributes, $this);
    }

    public function bankByUrl(string $siteUrl): Bank
    {
        $siteAttributes = $this->get("banks/url/{$siteUrl}");

        return new Bank($siteAttributes, $this);
    }

    public function createBank(array $data): Bank
    {
        //dd('createVaAccountList&data=' . json_encode($data). '&language=vi');
        $siteAttributes = $this->post('createVaAccountList&data=' . json_encode($data), $data);

        return new Bank($siteAttributes, $this);
    }

    public function updateBank(array $data): Bank
    {
        $siteAttributes = $this->post('updateVaAccount&data=' . json_encode($data), $data);

        return new Bank($siteAttributes, $this);
    }

    public function deleteBank(int $bankID)
    {
        $this->delete("banks/$bankID");
    }
}
