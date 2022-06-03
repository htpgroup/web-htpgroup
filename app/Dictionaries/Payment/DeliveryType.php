<?php

namespace App\Dictionaries\Payment;

/*
 *
 * 1: "Tiền mặt",
 * 2: "Thẻ cào",
 * 3: "Thẻ ATM, IB online",
 * 4: "Chuyển khoản ATM, Quầy",
 * 5: "Thẻ tín dụng",
 * 6: "Thẻ, tài khoản bank liên kết"
 *
 * @created 2022/04/13
 * */

class DeliveryType
{
    const  CASH = 'CASH';

    const  VISA_DEBIT = 'VISA_DEBIT';

    public static function all()
    {
        return [
            self::CASH => 'Tiền mặt',

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
