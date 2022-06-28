<?php

namespace App\Services\VietQR;

use App\Services\VietQR\Actions\ManagesApplicationHealthChecks;
use App\Services\VietQR\Actions\ManagesBanks;
use App\Services\VietQR\Actions\ManagesBrokenLinks;
use App\Services\VietQR\Actions\ManagesCertificateHealth;
use App\Services\VietQR\Actions\ManagesChecks;
use App\Services\VietQR\Actions\ManagesCronChecks;
use App\Services\VietQR\Actions\ManagesDnsHistoryItems;
use App\Services\VietQR\Actions\ManagesDowntime;
use App\Services\VietQR\Actions\ManagesMaintenancePeriods;
use App\Services\VietQR\Actions\ManagesMixedContent;
use App\Services\VietQR\Actions\ManagesPerformance;
use App\Services\VietQR\Actions\ManagesQRCodes;
use App\Services\VietQR\Actions\ManagesSites;
use App\Services\VietQR\Actions\ManagesStatusPages;
use App\Services\VietQR\Actions\ManagesStatusPageUpdates;
use App\Services\VietQR\Actions\ManagesUptime;
use App\Services\VietQR\Actions\ManagesUsers;
use Carbon\Carbon;
use GuzzleHttp\Client;

class VietQR
{
    use MakesHttpRequests;
    use ManagesSites;
    use ManagesChecks;
    use ManagesUsers;
    use ManagesBanks;
    use ManagesQRCodes;
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

    public function __construct(string $apiToken, string $baseUri = 'https://api.vietqr.io/v2/')
    {
        $this->apiToken = $apiToken;

        $this->client = new Client([
            'base_uri' => $baseUri,
            'http_errors' => false,
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
