<?php

require 'Highway.php';

final class PedestrianWay extends Highway
{
    protected int $nbLane = 1;
    protected int $maxSpeed  = 10;

    public function addVehicle($vehicle)
    {
        if (!($vehicle instanceof Skateboard || $vehicle instanceof Bicycle))
        $this->currentVehicles[] = $vehicle;
    }
}