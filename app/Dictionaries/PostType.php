<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries;

class PostType
{
    const NOTE = 1;

    const PAGE = 2;

    const BLOG = 3;

    const RECRUITMENT = 4;

    const COURSE = 5;

    const ESTATE = 6;

    const ARTICLE = 6;

    public static function all()
    {
        return [
            self::NOTE => 'Note',
            self::PAGE => 'Page',
            self::BLOG => 'Blog',
            self::COURSE => 'Course',
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
