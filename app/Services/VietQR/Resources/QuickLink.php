<?php

namespace App\Services\VietQR\Resources;

/*
 * Quick Link
 *
 * */

class QuickLink extends ApiResource
{
    public string $url;

    public function __construct(array $attributes, $ohDear = null)
    {
        parent::__construct($attributes, $ohDear);
    }
}
