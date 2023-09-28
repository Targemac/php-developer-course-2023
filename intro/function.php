<?php


$status = 1;


function getStatus($status, $show_msg)
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

getStatus($status, "message");