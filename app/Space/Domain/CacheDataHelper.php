<?php

namespace App\Space\Domain;

use Illuminate\Support\Facades\Cache;

class CacheDataHelper
{

    /*
     * Store data
     *
     * */
    public static function storeData($key, $value)
    {
        Cache::put($key, $value, 15);
    }

    /*
     * Retrieve data
     *
     * */
    public static function retrieveData($key, $value)
    {
        Cache::get($key);
    }
}
