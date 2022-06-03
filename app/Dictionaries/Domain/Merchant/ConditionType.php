<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Domain\Merchant;


class ConditionType
{
    const FIXED = 1;
    const CHANGE = 2;

    public static function all()
    {
        return [
            self::FIXED => 'cố định',
            self::CHANGE => 'tuỳ biến',
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
