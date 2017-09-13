<?php 
namespace Classes\Interfaces;

interface VehicleBaseInterface
{
    public function getName();
    public function stop();
    public function refuel($fuelName);
}