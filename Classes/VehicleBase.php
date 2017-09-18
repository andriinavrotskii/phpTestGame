<?php

namespace PhpTestGame\Classes;

class VehicleBase
{
    protected $name;


    public function __construct()
    {
        $this->name = strtolower((new \ReflectionClass($this))->getShortName());
    }


    public function getName()
    {
        return $this->name;
    }


    public function stop() 
    {
        echo $this->name . ' stopped';
    }


    public function refuel($fuelName) 
    {
        echo $this->name . ' refuel ' . $fuelName;
    }

}
