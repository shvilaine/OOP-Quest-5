<?php

require '../src/Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
echo $car->brake();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

