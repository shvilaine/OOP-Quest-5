<?php

require_once 'Vehicle.php';

abstract class Truck extends Vehicle
{
    protected int $capacity;
    protected int $load = 0;

    public function __construct(string $color, int $nbSeats, string $energyType, int $capacity)
    {
        parent::__construct($color, $nbSeats, $energyType);
        $this->capacity = $capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function getLoad()
    {
        return $this->load;
    }

    public function fullLoad (int $load): string
    {
        $sentence = "In filling, please wait...";

        while($this->load < 100)
        if($this->load == $this->capacity) {
            $sentence = 'The truck is full';
        }
        return $sentence;
    }
}