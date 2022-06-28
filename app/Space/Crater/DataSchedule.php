<?php

namespace App\Space\Crater;

class DataSchedule
{
    public static function replaceSpecialCharacter($string)
    {
        $textResult = '';
        $textResult = str_replace('-', '\\-', $string);
        $textResult = str_replace('.', '\\.', $textResult);
        $textResult = str_replace('(', '\\(', $textResult);
        $textResult = str_replace(')', '\\)', $textResult);

        return $textResult;
    }
}
