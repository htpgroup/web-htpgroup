<?php

namespace App\Services\VietQR\Actions;

use App\Services\VietQR\Resources\BrokenLink;

trait ManagesBrokenLinks
{
    public function brokenLinks(int $siteId): array
    {
        return $this->transformCollection(
            $this->get("broken-links/$siteId")['data'],
            BrokenLink::class
        );
    }
}
