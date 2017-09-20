<?php 

namespace PhpTestGame\Classes\Interfaces;

use PhpTestGame\Classes\Interfaces\VehicleBaseInterface;


interface TruckInterface extends VehicleBaseInterface
{
    public function emptyLoads();
    public function load(string $loadName);
}