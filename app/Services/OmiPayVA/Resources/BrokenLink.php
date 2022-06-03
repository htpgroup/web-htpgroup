<?php

namespace App\Services\OmiPayVA\Resources;

class BrokenLink extends ApiResource
{
    /*
     * The status code the site responded with.
     */
    public ?int $statusCode;

    /*
     * The url that is broken.
     */
    public string $crawledUrl;

    /*
     * The url where the broken url was found.
     */
    public string $foundOnUrl;

    public function __construct(array $attributes, $omiPayVA = null)
    {
        parent::__construct($attributes, $omiPayVA);
    }
}
