<?php 

namespace PhpTestGame\Classes\Interfaces;

use PhpTestGame\Classes\Interfaces\VehicleBaseInterface;


interface HelicopterInterface extends VehicleBaseInterface
{
    public function takeOff();
    public function landing();
    public function fly();
}