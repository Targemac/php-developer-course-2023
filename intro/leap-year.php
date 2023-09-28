<?php

declare(strict_types=1);

function isLeap(int $year): bool
{

    if (($year % 4 == 0) || ($year % 100 != 0) && ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

echo isLeap(1997);

/*
    Given a year, report if it is a leap year.

    The tricky thing here is that a leap year in the Gregorian calendar occurs:

    on every year that is evenly divisible by 4

    except every year that is evenly divisible by 100

    unless the year is also evenly divisible by 400

    For example, 1997 is not a leap year, but 1996 is. 1900 is not a leap year, but 2000 is.
*/