<?php

namespace PhpTestGame\Classes;


abstract class AbstractVehicle
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


    public function refuel(string $fuelName) 
    {
        echo $this->name . ' refuel ' . $fuelName;
    }

}
