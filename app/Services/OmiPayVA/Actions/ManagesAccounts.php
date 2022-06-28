<?php

namespace App\Services\OmiPayVA\Actions;

use App\Services\OmiPayVA\Resources\Account;
use App\Services\OmiPayVA\Resources\History;

/*
 * $accounts = $omiPayVA->accounts();
 * $omiPayVA->account($accountID);
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
$omiPayVA->account($accountID)->startMaintenance($durationOfMaintenancePeriodInSeconds);
$omiPayVA->account($accountID)->stopMaintenance();
 * */

trait ManagesAccounts
{
    public function accounts(array $data = []): array
    {
        return $this->transformCollection(
            $this->get('getVaAccountList&data='.json_encode($data).'&language=vi')['data'],
            Account::class,
        );
    }

    /*
     * Danh sách
     * */
    public function merchants(array $data = []): array
    {
        $dataMerchants = $this->get('merchantGetList&data='.json_encode($data).'&language=vi');
        if (isset($dataMerchants['data'])) {
            return $this->transformCollection(
                $dataMerchants['data'],
                Account::class,
            );
        }

        return [];
    }

    /*
     * Get Info
     * */
    public function getInfo(array $data = []): Account
    {
        $siteAttributes = $this->get('userGetByEmail&data='.json_encode($data).'&language=vi');

        return new Account($siteAttributes, $this);
    }

    public function getMerchantPasscode(array $data = []): Account
    {
        $siteAttributes = $this->get('paymentGetMerchantPasscode&data='.json_encode($data).'&language=vi');

        return new Account($siteAttributes, $this);
    }

    public function countTotal(array $data = []): array
    {
        $siteAttributes = $this->get('countVaAccount&data='.json_encode($data).'&language=vi');

        return $siteAttributes;
    }

    public function account(int $accountID, array $data = []): Account
    {
        $siteAttributes = $this->get('getVaAccountByID&data='.json_encode($data).'&language=vi');

        return new Account($siteAttributes, $this);
    }

    public function history1(int $accountID, array $data = []): Account
    {
        $siteAttributes = $this->get('getVaAccountHistoryList&data='.json_encode($data).'&language=vi');

        return new Account($siteAttributes, $this);
    }

    public function history(array $data = []): array
    {
        return $this->transformCollection(
            $this->get('getVaAccountHistoryList&data='.json_encode($data).'&language=vi')['data'],
            History::class,
        );
    }

    /*
     * Login
     * */
    public function login(array $data = []): Account
    {
        $siteAttributes = $this->get('usercheckShalogin&data='.json_encode($data).'&language=vi');
        //$siteAttributes = $this->get("usercheckShalogin&" . http_build_query($data). '&language=vi');

        return new Account($siteAttributes, $this);
    }

    public function checkAccout(array $data = []): Account
    {
        $siteAttributes = $this->get('usercheckShalogin&data='.json_encode($data).'&language=vi');

        return new Account($siteAttributes, $this);
    }

    public function accountByUrl(string $siteUrl): Account
    {
        $siteAttributes = $this->get("accounts/url/{$siteUrl}");

        return new Account($siteAttributes, $this);
    }

    public function createAccount(array $data): Account
    {
        //dd('createVaAccountList&data=' . json_encode($data). '&language=vi');
        $siteAttributes = $this->post('createVaAccountList&data='.json_encode($data).'&language=vi', $data);

        //dd($siteAttributes);

        return new Account($siteAttributes, $this);
    }

    public function updateAccount(array $data): Account
    {
        $siteAttributes = $this->post('updateVaAccount&data='.json_encode($data).'&language=vi', $data);

        return new Account($siteAttributes, $this);
    }

    public function deleteAccount(int $accountID)
    {
        $this->delete("accounts/$accountID");
    }
}
