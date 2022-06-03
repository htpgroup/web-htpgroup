<?php

namespace App\Dictionaries\Domain\Merchant;

class ActiveType
{
    const ACTIVE = 1;
    const NOT_ACTIVE = 0;

    public static function all()
    {
        return [
            self::ACTIVE => 'Hoạt động',
            self::NOT_ACTIVE => 'Dừng',
        ];
    }

    public static function allItem()
    {
        $arrType = [
            0 => "Tất cả",

        ];
        return $arrType;
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
