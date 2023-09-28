<?php function sum(int | float ...$numbs)
{
    return array_sum($numbs);
}
echo sum(5, 3, 7,20);