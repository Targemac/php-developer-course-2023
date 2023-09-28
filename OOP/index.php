<?php

declare(strict_types=1);


// require_once("App/Account.php");
// require_once("App/SocialMedia.php");

/*
 below used to load classes required by our program 
 withput manually requireing individually 
 */
spl_autoload_register(
    function ($class) {
        /**replace backslah withforward slash  */
        $formattedClass = str_replace("\\", "/", $class);

        /**generate a full system path to the file */
        $path = "{$formattedClass}.php";

        require_once($path);
    }
);

/** 
 * the use keyword allows us import  a class from a particular namespace
 */

//(import multiple classes in from same namespace with curly braces)
use App\{Account, Account2, SocialMedia, Utility, ToasterPremium, AbstractProduct, RestaurantOne, RestaurantTwo, FoodApp};

/**
 * use App\Account;
 * use App\Account; (import single class from a namespace or)
 * 
 */

// $myAccount = new App\Account("charles", 20); //instance of a class,(accessing the Account class from the App namespace)
$myAccount = new Account("charles", 20); //instance of a class,(accessing the Account class from the App namespace)

$myAccount->balance = 25; //public property can be updated

echo "<pre>";
var_dump($myAccount::INTEREST_RATE); //2 columns are known as scope resolution operator
var_dump(Account::INTEREST_RATE); // scope resolution operator can also be accessed from the class directly
var_dump(Account::$count); // accessing static variable

Utility::printArr([25, 42, 62, 636]);

// echo $myAccount->balance; //

// echo "<br/>";
$myAccount->deposit(10)->deposit(20); //chaining methods, instead of calling each time
// echo $myAccount->balance; //

$myAccount = null;
/** its only applicable to objects */
$myAccount?->deposit(10)->deposit(20); //null coalescing operator is used to check if myAccount has been initialized and then call deposit method on it
// echo $myAccount;

echo "<br/>";
echo "<br/>";

$myAccount2 = new Account2("charles", 60);
echo $myAccount2->getBalance();

echo "<br/>";
$myToaster = new ToasterPremium(9);
$myToaster->toast();
echo "<br/>";

$restaurant = new FoodApp(new RestaurantOne);