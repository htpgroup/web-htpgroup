<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Cms;

class PriceUnit
{
    const DAY = 1;

    const WEEK = 2;

    const MONTH = 3;

    const YEAR = 4;

    public static function all()
    {
        return [
            self::DAY => 'Day',
            self::WEEK => 'Week',
            self::MONTH => 'Month',
            self::YEAR => 'Year',
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
