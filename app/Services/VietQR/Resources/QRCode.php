<?php

namespace App\Services\VietQR\Resources;

class QRCode extends ApiResource
{
    public int $id;

    public string $qrDataURL;

    public string $qrCode = '';


    public function __construct(array $attributes, $ohDear = null)
    {
        parent::__construct($attributes, $ohDear);

    }
}
