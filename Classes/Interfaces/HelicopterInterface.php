<?php 
namespace Classes\Interfaces;

use Classes\Interfaces\VehicleBaseInterface;

interface HelicopterInterface extends VehicleBaseInterface
{
    public function takeOff();
    public function landing();
    public function fly();
}