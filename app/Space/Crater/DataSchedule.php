<?php

namespace App\Space\Crater;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Crm\Invoice;
use Illuminate\Support\Str;

class DataSchedule
{

    public static function replaceSpecialCharacter($string)
    {
        $textResult = '';
        $textResult = str_replace("-", "\\-", $string);
        $textResult = str_replace(".", "\\.", $textResult);
        $textResult = str_replace("(", "\\(", $textResult);
        $textResult = str_replace(")", "\\)", $textResult);

        return $textResult;
    }
}
