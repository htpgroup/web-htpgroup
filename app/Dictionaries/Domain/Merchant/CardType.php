<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Domain\Merchant;

class CardType
{
    const HAND_METHOD = 1;

    const API_METHOD = 2;

    const VISA = 1;

    const MASTERCARD = 2;

    const JCB = 3;

    const AMEX = 4;

    const VISA_DEBIT = 5;

    const MASTERCARD_DEBIT = 6;

    const JCB_DEBIT = 7;

    const AMEX_DEBIT = 8;

    public static function all()
    {
        return [
            self::HAND_METHOD => 'thủ công',
            self::API_METHOD => 'api',
        ];
    }

    public static function allItem()
    {
        $allItem = [
            self::VISA => 'VISA',
            self::MASTERCARD => 'MASTERCARD',
            self::JCB => 'JCB',
            self::AMEX => 'AMEX',
            self::VISA_DEBIT => 'VISA_DEBIT',
            self::MASTERCARD_DEBIT => 'MASTERCARD_DEBIT',
            self::JCB_DEBIT => 'JCB_DEBIT',
            self::AMEX_DEBIT => 'AMEX_DEBIT',
        ];

        return $allItem;
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
