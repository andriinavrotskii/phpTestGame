<?php 
namespace Task\Classes\Interfaces;

use Task\Classes\Interfaces\VehicleBaseInterface;

interface HelicopterInterface extends VehicleBaseInterface
{
    public function takeOff();
    public function landing();
    public function fly();
}