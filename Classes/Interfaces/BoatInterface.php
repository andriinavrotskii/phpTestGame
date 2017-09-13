<?php 
namespace Task\Classes\Interfaces;

use Task\Classes\Interfaces\VehicleBaseInterface;

interface BoatInterface extends VehicleBaseInterface
{
    public function swim();
}