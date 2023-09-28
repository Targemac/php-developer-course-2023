<?php

declare(strict_types=1); //enabling strict mode in php
// declare(strict_types=0); //disabling strict mode in php

$status = "1"; //passing in a  string


/***
 * 
 * 
 // types
 mixed, 
 string, 
 int, 
 float, 
 bool, 
 void
 * 
 */

function getStatus(int | float $status, bool $show_msg = true): ?string
{

    $RESULT = match ($status) {
        1 =>  "success",
        2 => "denied",
        default => "unknown"
    };

    if ($show_msg) {
        var_dump(null);
    }

    return $RESULT;
}

getStatus($status);
