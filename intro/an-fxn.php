<?php

$multiplier = 5;

/*
 the "use()" keyword lets us use variables that are 
 outside a function, to be used inside a function
*/

$multiply = function (int $num) use ($multiplier) {
    return $num * $multiplier;
};

// creating arrow functions
$multiply_b = fn ($num) => $num * $multiplier;

function sum(int $a, int $b, callable $callback)
{
    return $callback($a + $b);
}

// call a function: approach 1
echo sum(7, 3, $multiply);

echo "<br/>";

// call a function: approach 2
echo sum(6, 6, fn ($num) => $num * $multiplier);

echo "<br/>";

// call a function: approach 3
echo sum(1, 4, $multiply_b);