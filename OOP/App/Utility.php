<?php

namespace App;

class Utility
{

    // docblock (used to document our code)
    /**
     * Neatly prints an array
     * 
     * OUtputs array formatted by pre tags for formatting
     * 
     * @param array $array The array to output
     * 
     */

    // creating a static method
    public static function printArr(array $array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}