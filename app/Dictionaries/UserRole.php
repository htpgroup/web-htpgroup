<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries;


class UserRole
{
    const SUPER_ADMIN = 'super_admin';
    const ADMIN = 'admin';
    const MANAGER = 'manager';
    const SALE = 'sale';
    const CONTENT = 'content';
    const USER = 'user';
    const CUSTOMER = 'customer';

    public static function all()
    {
        return [
            self::CUSTOMER => __('common.user_role.customer'),
            self::USER => __('common.user_role.user'),
            self::SALE => __('common.user_role.sale'),
            self::MANAGER => __('common.user_role.manager'),
            self::CONTENT => __('common.user_role.content'),
            self::ADMIN => __('common.user_role.admin'),
        ];
    }

    public static function get($role)
    {
        $all = self::all();

        if (isset($all[$role])) {
            return $all[$role];
        }

        return '';
    }
}
