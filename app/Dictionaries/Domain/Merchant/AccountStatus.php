<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Domain\Merchant;

class AccountStatus
{
    const ONE_TIME = 1;

    const MULTIPLE_TIME = 2;

    public static function all()
    {
        return [
            self::ONE_TIME => '1 lần',
            self::MULTIPLE_TIME => 'nhiều lần',
        ];
    }

    public static function allItem()
    {
        return [
            1 => 'Hoạt động',
            0 => 'Khoá',
        ];
    }

    public static function allItemStatus()
    {
        return [
            2 => 'Đã thanh toán',
            3 => 'Đã  hết hạn, từ chối do Merchant',
            4 => 'Đã  hết hạn, từ chối do System',
            1 => 'Hoạt động',
            0 => 'Khoá',
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

    public static function getStatus($type)
    {
        $all = self::allItem();

        if (isset($all[$type])) {
            return $all[$type];
        }

        return 'Khoá';
    }
}
