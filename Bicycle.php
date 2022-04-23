<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
        return false;
    }

    public function switchOff()
    {
        return false;
    }
}
