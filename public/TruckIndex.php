<?php

require_once '../src/Truck.php';

$truck  = new Truck('white', 6, 'fuel', 40);

echo $truck->forward() . PHP_EOL;
echo $truck->brake() . PHP_EOL;
echo $truck->brake();

echo $truck->fullLoad(100);
echo $truck->getLoad();
echo $truck->fullLoad(100);

var_dump($truck);

