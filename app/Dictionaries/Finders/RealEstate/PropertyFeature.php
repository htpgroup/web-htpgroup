<?php

namespace App\Dictionaries\Finders\RealEstate;

class PropertyFeature
{
    const HOUSE = 1;

    const APARTMENT = 2;

    public static function all()
    {
        return [
            self::HOUSE => 'Nhà',
            self::APARTMENT => 'Chung cư',
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
