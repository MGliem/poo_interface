<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function __construct()
    {
        parent::__construct($this->nbLane, $this->maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles($vehicle);
    }
}
