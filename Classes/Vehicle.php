<?php

namespace Task\Classes;

class Vehicle
{
    private $vehicle;

    public function __construct($name)
    {
        switch($name)
        {
            case 'bmw':
                $this->vehicle = new Bmw($name);
                break;
            case 'boat':
                $this->vehicle = new Boat($name);
                break;
            case 'helicopter':
                $this->vehicle = new Helicopter($name);
                break;
            case 'kamaz':
                $this->vehicle = new Kamaz($name);
                break;
            
            default:
                throw new \InvalidArgumentException("{$name} is not a valid vehicle");
            
        }
    }


    public function __call($method, $arguments)
    {
        if (method_exists($this->vehicle, $method)) {
            $reflectionMethod = new \ReflectionMethod(get_class($this->vehicle), $method);
            return $reflectionMethod->invokeArgs($this->vehicle, $arguments);
        } 
        
        else {
            throw new \InvalidArgumentException("{$method} is not exist");
        }
    }
}
