<?php

namespace App\Services\OmiPayVA\Actions;

use App\Services\OmiPayVA\Resources\Transaction;

/*
 * $accounts = $omiPayVA->accounts();
 * $omiPayVA->Transaction($accountID);
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
$omiPayVA->Transaction($accountID)->startMaintenance($durationOfMaintenancePeriodInSeconds);
$omiPayVA->Transaction($accountID)->stopMaintenance();
 * */

trait ManagesTransactions
{
    public function transactions(array $data = []): array
    {
        return $this->transformCollection(
            $this->get('historyGetListTransaction&data='.json_encode($data).'&language=vi')['data'],
            Transaction::class,
        );
    }

    public function transaction(int $accountID, array $data = []): Transaction
    {
        $siteAttributes = $this->get('paymentGetTransactionById&data='.json_encode($data).'&language=vi');

        return new Transaction($siteAttributes, $this);
    }

    public function historyList(int $accountID, array $data = []): Transaction
    {
        $siteAttributes = $this->get('getVaAccountHistoryList&data='.json_encode($data).'&language=vi');

        return new Transaction($siteAttributes, $this);
    }

    public function transactionByUrl(string $siteUrl): Transaction
    {
        $siteAttributes = $this->get("accounts/url/{$siteUrl}");

        return new Transaction($siteAttributes, $this);
    }

    public function createTransaction(array $data): Transaction
    {
        $siteAttributes = $this->post('createVaAccountList&data='.json_encode($data).'&language=vi', $data);

        return new Transaction($siteAttributes, $this);
    }

    public function updateTransaction(array $data): Transaction
    {
        $siteAttributes = $this->post('updateVaAccount&data='.json_encode($data).'&language=vi', $data);

        return new Transaction($siteAttributes, $this);
    }

    public function deleteTransaction(int $accountID)
    {
        $this->delete("accounts/$accountID");
    }
}
