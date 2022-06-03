<?php

namespace App\Dictionaries\Payment;

/*
 *
 * @created 2022/04/22 11:00:00
 * */

class CurrencyCode
{
    const  JPY = 'JPY';
    const  KRW = 'KRW';
    const  MYR = 'MYR';
    const  CNY = 'CNY';
    const  IDR = 'IDR';
    const  PHP = 'PHP';
    const  SGD = 'SGD';
    const  THB = 'THB';
    const  VND = 'VND';


    public static function all()
    {
        return [
            self::VND => 'Viet Nam',
            self::KRW => 'Won Korea',
            self::MYR => 'Ringgit Malaysia',
            self::CNY => 'Nhân dân tệ',
            self::IDR => 'Rupiah Indonesia',
            self::PHP => 'Peso Philippines',
            self::SGD => 'Dollar Singapore',
            self::THB => 'Baht Thailand',
            self::JPY => 'Yên Japan',

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
