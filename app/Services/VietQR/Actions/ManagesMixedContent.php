<?php

namespace App\Services\VietQR\Actions;

use App\Services\VietQR\Resources\MixedContentItem;

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
