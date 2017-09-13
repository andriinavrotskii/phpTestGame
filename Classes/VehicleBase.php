<?php

namespace Classes;

class VehicleBase
{
    protected $name;


    public function __construct($name)
    {
        $this->name = $name;
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
