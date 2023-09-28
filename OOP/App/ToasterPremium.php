<?php

namespace App;

/**
 * inheritance defined
 */
class ToasterPremium extends Toaster
{
    protected int $slots; //current property is used, instead of inherited props
    private int $duration;

    public function __construct(int $newDuration)
    {
        parent::__construct(); //calling the parent construct method (calling it first overrides the construct below)
        $this->slots = 4;
        $this->duration = $newDuration;
    }

    public function toast()
    {
        /**using the parent method alongside the child method */
        parent::toast();
        echo " for {$this->duration} minutes ...";
    }
}
