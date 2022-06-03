<?php

namespace App\Dictionaries\Finders\RealEstate;

/*
 * Danh mục nhà đất
 *
 * */

class PropertyCategory
{
    const SALE = 1;
    const RENT = 2;
    const BUY = 3;


    public static function all()
    {
        return [
            self::SALE => 'Nhà đất Bán',
            self::RENT => 'Cho Thuê',
            self::BUY => 'Cần Mua',
        ];
    }

    public static function get($category)
    {
        $all = self::all();

        if (isset($all[$category])) {
            return $all[$category];
        }

        return '';
    }
}
