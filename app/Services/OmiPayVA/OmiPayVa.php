<?php

namespace App\Services\OmiPayVA;

use App\Services\OmiPayVA\Actions\ManagesAccounts;
use App\Services\OmiPayVA\Actions\ManagesBanks;
use App\Services\OmiPayVA\Actions\ManagesBrokenLinks;
use App\Services\OmiPayVA\Actions\ManagesCertificateHealth;
use App\Services\OmiPayVA\Actions\ManagesChecks;
use App\Services\OmiPayVA\Actions\ManagesCronChecks;
use App\Services\OmiPayVA\Actions\ManagesDnsHistoryItems;
use App\Services\OmiPayVA\Actions\ManagesDowntime;
use App\Services\OmiPayVA\Actions\ManagesMaintenancePeriods;
use App\Services\OmiPayVA\Actions\ManagesMixedContent;
use App\Services\OmiPayVA\Actions\ManagesPerformance;
use App\Services\OmiPayVA\Actions\ManagesSites;
use App\Services\OmiPayVA\Actions\ManagesStatusPages;
use App\Services\OmiPayVA\Actions\ManagesStatusPageUpdates;
use App\Services\OmiPayVA\Actions\ManagesTransactions;
use App\Services\OmiPayVA\Actions\ManagesUptime;
use App\Services\OmiPayVA\Actions\ManagesUsers;
use Carbon\Carbon;
use GuzzleHttp\Client;

/*
 * $apiKey = "iK4YfZe2i1RAe22tKP4xejGKDZP .... ";
 * $omiPayVA = new OhDear\PhpSdk\OhDear($apiKey);
 *
 * */

class OmiPayVa
{
    use MakesHttpRequests;
    use ManagesTransactions;
    use ManagesBanks;
    use ManagesSites;
    use ManagesAccounts;
    use ManagesChecks;
    use ManagesUsers;
    use ManagesBrokenLinks;
    use ManagesMaintenancePeriods;
    use ManagesMixedContent;
    use ManagesUptime;
    use ManagesDowntime;
    use ManagesCertificateHealth;
    use ManagesStatusPages;
    use ManagesStatusPageUpdates;
    use ManagesPerformance;
    use ManagesCronChecks;
    use ManagesDnsHistoryItems;

    /** @var string */
    public string $apiToken;

    public Client $client;

    public function __construct(string $apiToken = '123', string $baseUri = 'http://10.0.7.17:8080/')
    {
        $this->apiToken = $apiToken;

        $urlDev = env('API_OMIPAY_URL', 'http://10.0.7.24:8080');

        $this->client = new Client([
            'base_uri' => $urlDev,
            //'port' => 8080,
            'timeout' => 10,
            'http_errors' => false,
            'verify' => false,
            //'debug' => true,
            'headers' => [
                'Authorization' => "Bearer {$this->apiToken}",
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getClient()
    {
        $client = $this->client;

        return $client;
    }

    protected function transformCollection(array $collection, string $class): array
    {
        //dd($collection);
        return array_map(function ($attributes) use ($class) {
            return new $class($attributes, $this);
        }, $collection);
    }

    public function convertDateFormat(string $date, $format = 'YmdHis'): string
    {
        return Carbon::parse($date)->format($format);
    }
}
