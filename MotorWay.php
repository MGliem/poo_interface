<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function __construct()
    {
        parent::__construct($this->nbLane, $this->maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if (!$vehicle instanceof Bicycle && !$vehicle instanceof Skateboard) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
