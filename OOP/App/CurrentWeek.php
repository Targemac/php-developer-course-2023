<?php


// 

namespace App;

use DateTime;

class CurrentWeek implements \Iterator
{
    public DateTime $date;
    public int $daysFrom = 0;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function current(): mixed
    {
        return $this->date->format("F j Y");
    }

    public function key(): mixed
    {
        return $this->daysFrom;
    }

    public function next(): void
    {
        // thid function runs after every iteration
        $this->date->modify("tomorrow");
        $this->daysFrom++;
    }
    
    public function rewind(): void
    {
        // called when a loop is initiated
        $this->date->modify("today"); 
        $this->daysFrom = 0;
    }

    public function valid(): bool
    {
        return $this->daysFrom < 7;
    }
}