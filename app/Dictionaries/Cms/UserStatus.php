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

class UserStatus
{
    const NOT_ACTIVE = 1;

    const ACTIVE = 2;

    const DELETED = 3;

    const BANNER = 4;

    public static function all()
    {
        return [
            self::NOT_ACTIVE => 'Tạm dừng',
            self::ACTIVE => 'Hoạt động',
            self::DELETED => 'Đã xoá',
            self::BANNER => 'Khoá',
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
