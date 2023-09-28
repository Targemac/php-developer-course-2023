<?php


declare(strict_types=1); //enabling the strict mode in php

// a string must be passed in as argument
// the function must return a string
function twoFer(string $name = "your"): string
{

   return "One for {$name}, one for me.";
}
twoFer("Charles");
twoFer();