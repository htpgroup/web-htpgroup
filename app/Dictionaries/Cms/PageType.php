<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Cms;

/*
 * User status
 * */

class PageType
{
    const PRIVACY_POLICY = 1;

    const TERM_OF_SERVICE = 2;

    const COOKIE_POLICY = 3;

    const TERM_AND_CONDITION = 4;

    const RETURN_POLICY = 5;

    const SHIPPING_POLICY = 6;

    public static function all()
    {
        return [
            self::PRIVACY_POLICY => 'Chính sách bảo mật',
            self::RETURN_POLICY => 'Chính sách đổi trả',
            self::SHIPPING_POLICY => 'Chính sách giao hàng',
            self::TERM_OF_SERVICE => 'Dịch vụ',
            self::COOKIE_POLICY => 'Cookie',
            self::TERM_AND_CONDITION => 'Hướng dẫn',
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
