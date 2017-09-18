<?php 

namespace PhpTestGame\Classes\Interfaces;

use PhpTestGame\Classes\Interfaces\VehicleBaseInterface;


interface BoatInterface extends VehicleBaseInterface
{
    public function swim();
}