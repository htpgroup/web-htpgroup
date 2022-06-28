<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Cms;

/*
 * Perpage
 * */

class PerPageValue
{
    const TEN = 10;

    const TWENTY = 20;

    const THIRTY = 30;

    public static function all()
    {
        return [
            self::TEN => '10',
            self::TWENTY => '20',
            self::THIRTY => '30',

        ];
    }

    public static function get($type)
    {
        $all = self::all();

        if (isset($all[$type])) {
            return $all[$type];
        }

        return '';
    }
}
