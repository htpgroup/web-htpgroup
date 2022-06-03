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

class JobType
{
    const CONTRACT = 1;
    const FREELANCE = 2;
    const FULL_TIME_PERMANENT = 3; //CỐ ĐỊNH
    const INTERNSHIP = 4;
    const PART_TIME = 5;

    const FRESH = 10;
    const Less_Than_ONE_Year = 11;

    public static function all()
    {
        return [
            self::CONTRACT => 'Contract ',
            self::FREELANCE => 'Freelance ',
            self::FULL_TIME_PERMANENT => 'Full Time/Permanent ',
            self::INTERNSHIP => 'Internship ',
            self::PART_TIME => 'Part_Time',

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
