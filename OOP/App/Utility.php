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

        // checj if aray is empty
        if (count($array) === 0) {
            // the backslah "\" tells php to look for the class in the global namespace
            throw new EmptyArrayException();
        }

        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}