<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Domain;

class SpaceGolfProductTypeType
{
    const CREATE = 1;

    const EDIT = 2;

    public static function all()
    {
        return [
            self::CREATE => 'Thêm mới',
            self::EDIT => 'Cập nhật',
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
