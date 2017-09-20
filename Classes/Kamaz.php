<?php

namespace PhpTestGame\Classes;

use PhpTestGame\Classes\Interfaces\TruckInterface;
use PhpTestGame\Classes\AbstractVehicle;


class Kamaz extends AbstractVehicle implements TruckInterface
{
    private $loadName;


    public function emptyLoads() 
    {
        echo $this->name . ' empty loads ' . $this->loadName;
        $this->loadName = '';
    }


    public function load(string $loadName) 
    {
        $this->loadName = $loadName;
        echo $this->name . ' load ' . $this->loadName;
    }
}
