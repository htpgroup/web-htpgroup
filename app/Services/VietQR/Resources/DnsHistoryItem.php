<?php

namespace App\Services\VietQR\Resources;

class DnsHistoryItem extends ApiResource
{
    public int $id;

    public array $authoritativeNameservers;

    public array $dnsRecords;

    public array $rawDnsRecords;

    public array $issues;

    public string $diffSummary;

    public string $createdAt;
}
