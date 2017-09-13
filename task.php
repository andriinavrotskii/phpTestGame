<?php
namespace Task;

use Task\Classes\Vehicle;

$vehicles = [
    new Vehicle('bmw'), 
    new Vehicle('boat'), 
    new Vehicle('helicopter'), 
    new Vehicle('kamaz')
];

foreach($vehicles as $vehicle) {
    switch($vehicle->getName())
    {
        case 'bmw':
            $vehicle->move();
            $vehicle->musicOn();
            break;
        case 'boat':
            $vehicle->move();
            $vehicle->swim();
            break;
        case 'helicopter':
            $vehicle->takeOff();
            $vehicle->fly();
            $vehicle->landing();
            break;
        case 'kamaz':
            $vehicle->move();
            $vehicle->stop();
            $vehicle->load('sand');
            $vehicle->emptyLoads();
            break;
    }
    $vehicle->stop();
    $vehicle->refuel('gas');
}