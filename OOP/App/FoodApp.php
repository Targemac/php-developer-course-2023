<?php

// 

namespace App;

// rsponsible for telling food restaurant to start preparing food
class FoodApp
{
    public function __construct(RestaurantInterface $restaurant)
    {
        $restaurant->prepareFood();
    }
}