<?php 
namespace Task\Classes\Interfaces;

use Task\Classes\Interfaces\VehicleBaseInterface;

interface TruckInterface extends VehicleBaseInterface
{
    public function emptyLoads();
    public function load($loadName);
}