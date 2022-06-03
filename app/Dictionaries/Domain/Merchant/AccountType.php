<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Domain\Merchant;


class AccountType
{
    const ONE_TIME = 1;
    const MULTIPLE_TIME = 2;

    public static function all()
    {
        return [
            self::ONE_TIME => '1 lần',
            self::MULTIPLE_TIME => 'nhiều lần',
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
