<?php
$names = ["John", "sam", "paul"];
print_r($names);

echo "<br/>";

unset($names[1]);

$names = array_values($names);
print_r($names);


/*
Array ( [0] => John [1] => sam [2] => paul )
Array ( [0] => John [2] => paul )
*/
/*
Array ( [0] => John [1] => sam [2] => paul )
Array ( [0] => John [1] => paul )
*/