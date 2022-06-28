<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries;

class MenuData
{
    const HOME = 1;

    const ABOUT = 2;

    const PRODUCT = 3;

    const SERVICE = 4;

    const BLOG = 5;

    const CONTACT = 6;

    const PROFILE = 7;

    const HELP = 8;

    public static function all()
    {
        return [
            self::HOME => 'Home',
            self::ABOUT => 'About',
            self::PRODUCT => 'Product',
            self::SERVICE => 'Service',
            self::BLOG => 'Blog',
            self::CONTACT => 'Contact',
            self::PROFILE => 'Profile',
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
