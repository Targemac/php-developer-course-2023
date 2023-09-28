<?php

$cup = "empty";

// the amper sign enables args to be passed by reference
function fillCup(&$cupParam)
{
    $cupParam = "filled";
}

// pass args by value
fillCup($cup);

echo $cup;