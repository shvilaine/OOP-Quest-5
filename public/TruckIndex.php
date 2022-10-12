<?php

require_once '../src/Truck.php';

$beepBeep = new Truck('white', 6, 'fuel', 40);
echo $beepBeep->forward() . PHP_EOL;
echo $beepBeep->brake() . PHP_EOL;
echo $beepBeep->brake();

echo $beepBeep->fullLoad(100);
echo $beepBeep->getLoad();
echo $beepBeep->fullLoad(100);

var_dump($beepBeep);

