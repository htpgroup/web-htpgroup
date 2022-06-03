<?php


namespace App\Dictionaries;


class PaymentOptions
{
    const IMMEDIATE_MONEY = 1;
    const THD_PAYMENT = 2;
    const BANK_TRANFER = 3;
    const CASH_ON_DATE = 4;

    public static function getAll()
    {
        return [
            self::IMMEDIATE_MONEY => 'immediate',
            self::THD_PAYMENT => 'thd',
            self::BANK_TRANFER => 'tranfer',
            self::CASH_ON_DATE => 'cash',
        ];
    }

    public static function get($method)
    {
        $all = self::getAll();

        if (isset($all[$method])) {
            return $all[$method];
        }

        return '';
    }
}
