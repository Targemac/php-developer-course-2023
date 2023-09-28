<?php


// 1. Create function for accepting the color as a string.
// 2. Create an array resistor colors with their relative numeric code
// 3. Return a numeric code based on the color's name

function colorCode(string $color)
{
    $name = "";

    $resistor_colors = ["black" => 0, "brown" => 1, "red" => 2, "orange" => 3, "yellow" => 4, "green" => 5, "blue" => 6, "violet" => 7, "grey" => 8, "white" => 9];

    foreach ($resistor_colors as $key => $resistor_color) {
        if ($color == $key) {
            $name = $resistor_color;
        }
    }

    return  $name;
}


colorCode("yellow");