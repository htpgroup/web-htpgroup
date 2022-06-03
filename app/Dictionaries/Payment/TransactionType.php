<?php

namespace App\Dictionaries\Payment;

/*
 *  Chuyển tiền
 *  Hoàn tiền
 *  Nạp tiền
 *  Rút tiền
 *  Thanh toán cho bên thứ 3
 *  Giao dịch phí
 *  Thanh toán
 *  Yêu cầu thanh toán
 *  Tặng  Quà tặng thanh toán
 * */

class TransactionType
{
    const TRANFER = 1; //Chuyển tiền
    const WITHDRAW = 2; //Rút tiền
    const DEPOSIT = 3; //Nạp tiền

    public static function all()
    {
        return [
            self::TRANFER => 'Chuyển tiền',
            self::WITHDRAW => 'Rút tiền',
            self::DEPOSIT => 'Nạp tiền',
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
