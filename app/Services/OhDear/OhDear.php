<?php

namespace App\Services\OhDear;

use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Services\OhDear\Actions\ManagesBrokenLinks;
use App\Services\OhDear\Actions\ManagesCertificateHealth;
use App\Services\OhDear\Actions\ManagesChecks;
use App\Services\OhDear\Actions\ManagesCronChecks;
use App\Services\OhDear\Actions\ManagesDnsHistoryItems;
use App\Services\OhDear\Actions\ManagesDowntime;
use App\Services\OhDear\Actions\ManagesMaintenancePeriods;
use App\Services\OhDear\Actions\ManagesMixedContent;
use App\Services\OhDear\Actions\ManagesPerformance;
use App\Services\OhDear\Actions\ManagesSites;
use App\Services\OhDear\Actions\ManagesStatusPages;
use App\Services\OhDear\Actions\ManagesStatusPageUpdates;
use App\Services\OhDear\Actions\ManagesUptime;
use App\Services\OhDear\Actions\ManagesUsers;

/*
 * $apiKey = "iK4YfZe2i1RAe22tKP4xejGKDZP .... ";
 * $ohDear = new OhDear\PhpSdk\OhDear($apiKey);
 *
 * */

class OhDear
{
    use MakesHttpRequests;
    use ManagesSites;
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

    public function __construct(string $apiToken, string $baseUri = 'https://ohdear.app/api/')
    {
        $this->apiToken = $apiToken;

        $this->client = new Client([
            'base_uri' => $baseUri,
            'http_errors' => false,
            'timeout' => 5,
            'verify' => false,
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

    protected function transformCollection(array $collection, string $class): array
    {
        return array_map(function ($attributes) use ($class) {
            return new $class($attributes, $this);
        }, $collection);
    }

    public function convertDateFormat(string $date, $format = 'YmdHis'): string
    {
        return Carbon::parse($date)->format($format);
    }
}
