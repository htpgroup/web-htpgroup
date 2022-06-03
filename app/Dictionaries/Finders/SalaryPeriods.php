<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 18/09/2021
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Finders;


class SalaryPeriods
{
    const MONTHLY = 1;
    const  YEARLY = 2;
    const WEEKLY = 3;

    public static function all()
    {
        return [
            self::MONTHLY => 'Monthly',
            self::YEARLY => 'Yearly',
            self::WEEKLY => 'Weekly',
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
