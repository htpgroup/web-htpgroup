<?php

namespace App\Services\OmiPayVA\Actions;

use App\Services\OmiPayVA\Resources\MixedContentItem;

trait ManagesMixedContent
{
    public function mixedContent(int $siteId): array
    {
        return $this->transformCollection(
            $this->get("mixed-content/$siteId")['data'],
            MixedContentItem::class
        );
    }
}
