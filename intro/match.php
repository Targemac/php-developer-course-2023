<?php




$status = 4;
$RESULT = match ($status) {
    1 =>  "success",
    2 => "denied",
    default => "unknown"
};
echo $RESULT;
