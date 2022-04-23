<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function __construct()
    {
        parent::__construct($this->nbLane, $this->maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
