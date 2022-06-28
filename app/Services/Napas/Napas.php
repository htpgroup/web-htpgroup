<?php

namespace App\Services\Napas;

use App\Services\Napas\Actions\ManagesApplicationHealthChecks;
use App\Services\Napas\Actions\ManagesBrokenLinks;
use App\Services\Napas\Actions\ManagesCertificateHealth;
use App\Services\Napas\Actions\ManagesChecks;
use App\Services\Napas\Actions\ManagesCronChecks;
use App\Services\Napas\Actions\ManagesDnsHistoryItems;
use App\Services\Napas\Actions\ManagesDowntime;
use App\Services\Napas\Actions\ManagesMaintenancePeriods;
use App\Services\Napas\Actions\ManagesMixedContent;
use App\Services\Napas\Actions\ManagesPerformance;
use App\Services\Napas\Actions\ManagesSites;
use App\Services\Napas\Actions\ManagesStatusPages;
use App\Services\Napas\Actions\ManagesStatusPageUpdates;
use App\Services\Napas\Actions\ManagesUptime;
use App\Services\Napas\Actions\ManagesUsers;
use Carbon\Carbon;
use GuzzleHttp\Client;

class Napas
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
    use ManagesApplicationHealthChecks;
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
