<?php 

namespace PhpTestGame\Classes\Interfaces;


interface VehicleBaseInterface
{
    public function getName();
    public function stop();
    public function refuel(string $fuelName);
}