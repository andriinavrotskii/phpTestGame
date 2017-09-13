<?php 
namespace Classes\Interfaces;

use Classes\Interfaces\VehicleBaseInterface;

interface CarInterface extends VehicleBaseInterface
{
    public function move();
    public function musicOn();
}