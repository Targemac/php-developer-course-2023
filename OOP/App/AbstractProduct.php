<?php

namespace App;

/**
 * its recommeded to prefix your abstract class names with 'Abstract'
 */
abstract class AbstractProduct
{
    public function turnOn()
    {
        echo "turning on product...";
    }

    //abstract methods usually dont have curly braces {}
    abstract public function setup();
  
}