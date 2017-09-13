<?php 
namespace Classes\Interfaces;

use Classes\Interfaces\VehicleBaseInterface;

interface TruckInterface extends VehicleBaseInterface
{
    public function emptyLoads();
    public function load($loadName);
}