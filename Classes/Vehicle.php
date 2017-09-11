<?php

namespace Classes;

class Vehicle
{
    private $vehicle;

    public function __construct($name)
    {
        switch($name)
        {
            case 'car':
                $this->vehicle = new Car();
                break;
        }
    }

    public function __call($method, $arguments)
    {
        if (method_exists($this->vehicle, $method)) {
            return $this->vehicle->$method($arguments);
        }
    }
}
