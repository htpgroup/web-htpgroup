<?php

namespace App\Dictionaries\Customer;

/*
 * Trạng thái khách hàng
 * */

class CustomerStatusActive
{
    const F0_STATUS = 0;
    const F1_STATUS = 1;
    const F2_STATUS = 2;
    const F3_STATUS = 3;
    const F4_STATUS = 4;
    const F5_STATUS = 5;

    public static function all()
    {
        return [
            self::F0_STATUS => 'F0',
            self::F1_STATUS => 'F1',
            self::F2_STATUS => 'F2',
            self::F3_STATUS => 'F3',
            self::F4_STATUS => 'F4',
            self::F5_STATUS => 'F5',
        ];
    }

    public static function get($status)
    {
        $all = self::all();

        if (isset($all[$status])) {
            return $all[$status];
        }

        return '';
    }
}
