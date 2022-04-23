<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    private string $energy;
    private int $energyLevel = 100;
    private bool $isEngineStarted = false;
    private bool $hasParkBake = true;
    
    public const ALLOWED_ENERGIES = [
        'fuel',
        'gas',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start(): string
    {
        if ($this->getHasParkBake() === true) {
            throw new Exception('handbrake');
        }

        if ($this->isEngineStarted) {
            return 'Engine already started.';
        } else {
            $this->isEngineStarted = true;
            $this->currentSpeed = 0;
            $this->energyLevel -= 5;
            return 'Starting the engine.';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setHasParkBake($hasParkBake): self
    {
        $this->hasParkBake = $hasParkBake;

        return $this;
    }

    public function getHasParkBake(): bool
    {
        return $this->hasParkBake;
    }
}
