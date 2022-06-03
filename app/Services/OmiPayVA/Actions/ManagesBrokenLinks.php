<?php

namespace App\Services\OmiPayVA\Actions;

use App\Services\OmiPayVA\Resources\BrokenLink;

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
