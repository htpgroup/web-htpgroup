<?php

namespace App\Services\OmiPayVA\Exceptions;

use Exception;

class TimeOutException extends Exception
{
    public function __construct()
    {
        parent::__construct('The resource you are looking for could not be found. Request is timeout.');
    }
}
