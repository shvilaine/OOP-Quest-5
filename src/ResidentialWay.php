<?php

require 'Highway.php';

final class ResidentialWay extends Highway
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}