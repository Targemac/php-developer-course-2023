<?php

declare(strict_types=1);

// function isArmstrongNumber(int $number): bool
// {

//     $number = (string) $number; //cnvert to string
//     $arr = array_map('intval', str_split($number)); //convert to an array
//     $count = count($arr);

//     $sum =  0;

//     foreach ($arr as $key => $value) {
//         $sum = $sum + ($value ** $count);
//     }

//     // print($sum . "<br/>");

//     $number = (bool) $number; //cnvert to bool
//     if ($sum === $number) {
//         return true;
//     } else {
//         return false;
//     }
// }

function isArmstrongNumber(int $number): bool
{
    $digits = str_split((string) $number);

    $digits = array_map(function ($digit) use ($digits) {
        return $digit ** count($digits);
    }, $digits);

    return array_sum($digits) === $number;
}


isArmstrongNumber(123);