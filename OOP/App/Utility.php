<?php

namespace App;

class Utility
{
    // creating a static method
    public static function printArr(array $array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}
