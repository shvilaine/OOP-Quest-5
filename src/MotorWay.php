<?php

require 'Highway.php';

final class MotorWay extends Highway 
{
    protected int $nbLane = 4;
    protected int $maxSpeed  = 130;

    public function addVehicle($vehicle)
    {
        if (!($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
    }
}
}