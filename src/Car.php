<?php

require_once 'Vehicle.php';

abstract class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energyType;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        parent::__construct($color, $nbSeats, $energyType);
        $this->setEnergyType($energyType);
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): Car
    {
        if (in_array($energyType, self::ALLOWED_ENERGIES)) {
        $this->energyType = $energyType;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}

