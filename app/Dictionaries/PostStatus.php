<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries;

class PostStatus
{
    const NOT_PUBLISH = 2;

    const PUBLISH = 1;

    const WAIT_APPROVED = 3;

    const DELETED = 4;

    public static function all()
    {
        return [
            self::PUBLISH => 'Hiển thị',
            self::WAIT_APPROVED => 'Chờ duyệt',
            self::NOT_PUBLISH => 'Ẩn',
            self::DELETED => 'Đã xoá',
        ];
    }

    public static function get($status)
    {
        $all = self::all();

        if (isset($all[$status])) {
            return $all[$status];
        }

        return '';
    }
}
