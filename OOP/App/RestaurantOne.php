<?php

// 

namespace App;

/**
 * a class can implement an interface by adding the implemnts
 *  keyword then the name of the interface
 */
class RestaurantOne implements RestaurantInterface
{
    public function prepareFood()
    {
        echo "Prepareing food...";
    }
}
