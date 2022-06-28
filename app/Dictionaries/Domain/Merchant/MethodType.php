<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Domain\Merchant;

class MethodType
{
    const HAND_METHOD = 1;

    const API_METHOD = 2;

    public static function all()
    {
        return [
            self::HAND_METHOD => 'thủ công',
        ];
    }

    public static function allIem()
    {
        return [
            self::HAND_METHOD => 'thủ công',
            self::API_METHOD => 'api',
        ];
    }

    public static function get($type)
    {
        $type = intval($type);
        $all = self::allIem();

        if (isset($all[$type])) {
            return $all[$type];
        }

        return '';
    }
}
