<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Cms;

class ContentType
{
    const HTML = 1;

    const MARKDOWN = 2;

    const LONG_FORM = 3;

    const TEXT = 4;

    const TOP_POSITON = 1;

    const CENTER_POSITON = 2;

    const FOOTER_POSITON = 3;

    public static function all()
    {
        return [
            self::HTML => 'Html',
            self::MARKDOWN => 'Markdown',
            self::LONG_FORM => 'Long form',
            self::TEXT => 'Text',
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

    /*
     * Vị trí hiển thị
     * */
    public static function allPostion()
    {
        return [
            self::TOP_POSITON => 'Top',
            self::CENTER_POSITON => 'Middle',
            self::FOOTER_POSITON => 'Footer',
        ];
    }
}
