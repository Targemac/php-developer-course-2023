<?php

namespace App;

/**
 * the final keyword prevents other classes from extending current class
 */
class Toaster extends AbstractProduct
{
    /**if we use private, the child classes wont be able to modify it, so we use protected */
    protected int $slots;

    public function __construct()
    {
        $this->slots = 2;
        $this->turnOn();
    }

    /**
     * the final keyword prevents other classes from extending current method as well
     */
    // final public function toast()
    // {
    //     echo "{$this->slots} Toasting bread";
    // }

    public function toast()
    {
        echo "{$this->slots} Toasting bread";
    }

    public function setup(){
        
    }
}