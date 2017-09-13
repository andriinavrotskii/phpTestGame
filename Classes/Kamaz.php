<?php

namespace Classes;

use Classes\Interfaces\TruckInterface;
use Classes\VehicleBase;


class Kamaz extends VehicleBase implements TruckInterface
{
    private $loadName;


    public function emptyLoads() 
    {
        echo $this->name . ' empty loads ' . $this->loadName;
        $this->loadName = '';
    }


    public function load($loadName) 
    {
        $this->loadName = $loadName;
        echo $this->name . ' load ' . $this->loadName;
    }
}
