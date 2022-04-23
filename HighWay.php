<?php

abstract class HighWay
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    abstract public function addVehicle(Vehicle $vehicle);


    public function getCurrentVehicles(): array
    {
		if (isset($this->currentVehicles)) {
			return $this->currentVehicles;
		}
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }
 
    public function setNbLane($nbLane): void
    {
        if ($nbLane > 0) {
            $this->nbLane = $nbLane;
        }
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }


    public function setMaxSpeed($maxSpeed): void
    {
        if ($maxSpeed >= 0) {
            $this->maxSpeed = $maxSpeed;
        }
    }
}
