<?php

namespace App\Dictionaries\Payment;

/*
 *
 * Trạng thái
 * Chưa xác nhận
 * Tạm giữ
 * Đã hủy
 * Thành công
 * Đang chờ xử lý
 * Đã hoàn tiền
 * Đóng băng
 *
 * @created 2021/12/08
 * */

class CardType
{
    const  AMEX = 'AMEX';

    const  AMEX_DEBIT = 'AMEX_DEBIT';

    const  JCB = 'JCB';

    const  JCB_DEBIT = 'JCB_DEBIT';

    const  MASTERCARD = 'MASTERCARD';

    const  MASTERCARD_DEBIT = 'MASTERCARD_DEBIT';

    const  VISA = 'VISA';

    const  VISA_DEBIT = 'VISA_DEBIT';

    public static function all()
    {
        return [
            self::AMEX => 'AMEX',
            self::AMEX_DEBIT => 'AMEX_DEBIT',
            self::JCB => 'JCB',
            self::JCB_DEBIT => 'JCB_DEBIT',
            self::MASTERCARD => ' MASTERCARD',
            self::MASTERCARD_DEBIT => ' MASTERCARD_DEBIT',
            self::VISA_DEBIT => ' VISA_DEBIT',
            self::VISA => ' VISA',
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
