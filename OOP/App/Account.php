<?php

declare(strict_types=1);
/** what is a namespace           */

namespace App; //namespace lets us organize our classes virtually

use DateTime; //this lets us use the class without using the  backslash below
new \DateTime(); //the backlash tells php to check the global namespace tof the class

/*
    use DateTime as DT; //using aliases (names that are similar or too long)
    new DT(); // can be used here
*/

// create a class
class Account
{
    // define() cannot be used in a class, only constants
    public const INTEREST_RATE = 2;
    public static int $count = 0; //static variables retain their values even after the fxn call

    /*store an instnce of the SocialMedia class and set type to the SocialMedia class*/
    public SocialMedia $socialMedia;


    public function __construct(
        public string $name, //prperty
        public float $balance //prperty
    ) {
        $this->socialMedia = new SocialMedia();
        self::$count++;  //self keyword points to a class
        // $this::$count++; //$this keyword points to an instance of the class
    }

    // custom methods
    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this;
    }
}