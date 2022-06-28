<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries;

class Gender
{
    const FEMALE = 0;

    const MALE = 1;

    public static function all()
    {
        return [
            self::MALE => 'Nam',
            self::FEMALE => 'Nữ',
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
