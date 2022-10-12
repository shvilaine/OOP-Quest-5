<?php

require_once '../src/Bicycle.php';

$bicycle = new Bicycle('blue', 1, 'feet');
echo $bicycle->forward();
echo $bicycle->brake();
var_dump($bicycle);
