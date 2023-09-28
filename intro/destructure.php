<?php

$numbers = [5, 3, 7, 9];
$user = ["age" => 23, "name" => "ola", "gender" => "female"];

// methode 1
list($a, $b, $c, $d) = $numbers;

// methode 2
[$a, $b, $c, $d] = $numbers;
["name" => $name] = $user;

echo $d;
echo $name;
