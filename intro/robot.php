<?php

// here
declare(strict_types=1);

function getNewName(): string
{
    $output = "";

    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 0; $i < 2; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    $rand_n1 = rand(0, 9);
    $rand_n2 = rand(0, 9);
    $rand_n3 = rand(0, 9);

    $output = strtoupper($randomString) . $rand_n1 . $rand_n2 . $rand_n3;

    return $output;
}
echo getNewName();