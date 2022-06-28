<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Payment;

/*
 * OM: Thanh toán qua số dư ví
 * VISA: Thanh toán bằng thẻ Visa, Master Card
 * IB_ONLINE: Thanh toán bằng internet banking
 * QRCODE: Thanh toán bằng việc quét mã VNQR
 * ATM_ONLINE: Thanh toán online dùng thẻ ATM/Tài khoản ngân hàng trong nước
 * ATM_OFFLINE: Thanh toán chuyển khoản tại cây
 * */

class PaymentMethod
{
    const OM = 0;

    const VISA = 1;

    const IB_ONLINE = 2;

    const QRCODE = 3;

    const ATM_ONLINE = 4;

    const ATM = 5;

    const ATM_OFFLINE = 6;

    public static function all()
    {
        return [
            self::OM => __('Male'),
            self::VISA => __('Female'),
            self::IB_ONLINE => __('Female'),
            self::QRCODE => __('Female'),
            self::ATM_ONLINE => __('Female'),
            self::ATM => __('Female'),
            self::ATM_OFFLINE => __('Female'),
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
