<?php

declare(strict_types=1);

namespace App; //namespace lets us organize our classes virtually
new \DateTime(); //the backlash tells php to check the global namespace tof the class

// create a class
/**
 * Describing Encapsulation here
 * Encapsulation describes the process of restricting data and methods to a single object or class
 */

class Account2
{
    // define() cannot be used in a class, only constants
    public const INTEREST_RATE = 2;
    public static int $count = 0; //static variables retain their values even after the fxn call

    /*store an instnce of the SocialMedia class and set type to the SocialMedia class*/
    public SocialMedia $socialMedia;


    public function __construct(
        private string $name, //prperty
        private float $balance //prperty
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

    // create a getter method
    public function getBalance()
    {
        return  "$" . $this->balance;
    }

    // create a setter method
    public function setBalance(float $newBalance)
    {
        // check if
        if ($newBalance < 0) {
            return;
        }
        // else set to this;
        $this->balance = $newBalance;
        $this->sendEmail(); //send email after balance is updated
    }

    private function sendEmail()
    {
        echo "Balance updated";
    }
}