<?php

namespace App\Dictionaries\Domain\Merchant;

class PaymentType
{
    const HAND_METHOD = 1;

    const API_METHOD = 2;

    public static function all()
    {
        return [
            self::HAND_METHOD => 'thủ công',
            self::API_METHOD => 'api',
        ];
    }

    public static function allItem()
    {
        $arrType = [
            0 => 'Tất cả',
            1 => 'Chuyển tiền',
            2 => 'Hoàn lại',
            3 => 'Nạp',
            4 => 'Rút',
            5 => 'Thanh toán cho bên thứ 3',
            6 => 'Giao dịch phí',
            7 => 'Thanh toán trực tiếp',
            8 => 'Yêu cầu thanh toán',
            9 => 'Thanh toán ví ví',
            10 => 'Tặng',
            11 => 'Quà tặng thanh toán',
        ];

        return $arrType;
    }

    public static function allItemType()
    {
        $arrType = [
            0 => 'Tất cả',
            7 => 'Thanh toán trực tiếp',
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
