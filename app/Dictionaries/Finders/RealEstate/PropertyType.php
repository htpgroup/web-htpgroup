<?php

namespace App\Dictionaries\Finders\RealEstate;

class PropertyType
{
    const HOUSE = 1;
    const APARTMENT = 2;
    const SHOPHOUSE = 3;
    const NEAR_HOUSE = 4;


    public static function all()
    {
        return [
            self::HOUSE => 'Nhà',
            self::APARTMENT => 'Căn hộ Chung cư',
            self::SHOPHOUSE => 'Shophouse',
            self::NEAR_HOUSE => 'Biệt thự liền kề',
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
