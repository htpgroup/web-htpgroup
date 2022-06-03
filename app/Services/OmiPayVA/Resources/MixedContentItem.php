<?php

namespace App\Services\OmiPayVA\Resources;

class MixedContentItem extends ApiResource
{
    /*
     * The name of the element that was detected as mixed content.
     */
    public string $elementName;

    /*
     * The url of the detected mixed content.
     */
    public string $mixedContentUrl;

    /*
     * The url where the mixed content was found.
     */
    public string $foundOnUrl;

    public function __construct(array $attributes, $omiPayVA = null)
    {
        parent::__construct($attributes, $omiPayVA);
    }
}
