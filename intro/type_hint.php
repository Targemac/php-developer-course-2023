<?php


$status = 1;


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
        return "null";
    }

    return $RESULT;
}

getStatus($status);
