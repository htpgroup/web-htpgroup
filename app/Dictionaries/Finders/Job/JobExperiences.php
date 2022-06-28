<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 18/09/2021
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Finders\Job;

/*
 * JobExperiences
 *
 * */

class JobExperiences
{
    const ONE_YEAR = 1;

    const TWO_YEAR = 2;

    const THREE_YEAR = 3;

    const FOUR_YEAR = 4;

    const FIVE_YEAR = 5;

    const SIX_YEAR = 6;

    const SEVEN_YEAR = 7;

    const EITGHT_YEAR = 8;

    const NINE_YEAR = 9;

    const TEN_YEAR = 10;

    const FRESH = 11;

    const Less_Than_ONE_Year = 12;

    public static function all()
    {
        return [
            self::ONE_YEAR => 'One Year',
            self::TWO_YEAR => 'One Year',
            self::THREE_YEAR => 'One Year',
            self::FOUR_YEAR => 'One Year',
            self::FIVE_YEAR => 'One Year',
            self::SIX_YEAR => 'Six Year',
            self::SEVEN_YEAR => 'Seven Year',
            self::EITGHT_YEAR => 'Eight Year',
            self::NINE_YEAR => 'Nine Year',
            self::TEN_YEAR => 'Ten Year',
            self::FRESH => 'One Year',
            self::Less_Than_ONE_Year => 'One Year',
        ];
    }

    public static function get($experience)
    {
        $all = self::all();

        if (isset($all[$experience])) {
            return $all[$experience];
        }

        return '';
    }
}
