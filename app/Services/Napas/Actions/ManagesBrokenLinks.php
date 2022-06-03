<?php

namespace App\Services\Napas\Actions;

use App\Services\Napas\Resources\BrokenLink;

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
