<?php

namespace Classes;

use Classes\Interfaces\HelicopterInterface;
use Classes\VehicleBase;


class Helicopter extends VehicleBase implements HelicopterInterface
{
    public function takeOff()
    {
        echo $this->name . ' took off';
    }


    public function landing()
    {
        echo $this->name . ' landing';
    }

    
    public function fly()
    {
        echo $this->name . ' flying';
    }
}