<?php

// 

namespace App;

interface RestaurantInterface
{
    // properties are not allowed in interfaces
    // we can use constants
    // all methods can not have an implemetation, they must be abstract
    // methods can be public or proted, not private

    public function prepareFood();
}