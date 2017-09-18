<?php

namespace PhpTestGame\Classes;


class Vehicle
{
    private $vehicle;


    public function __construct($className)
    {
        $classNameFull = __NAMESPACE__ . '\\' . ucfirst(strtolower($className));

        if (class_exists($classNameFull)) {
            $this->vehicle = new $classNameFull();
        } else {
            throw new \InvalidArgumentException("{$className} is not a valid vehicle");
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
