<?php

namespace Classes;

use Classes\Interfaces\CarInterface;
use Classes\VehicleBase;


class Bmw extends VehicleBase implements CarInterface
{
    public function move()
    {
        echo $this->name . ' moveing';
    }


    public function musicOn()
    {
        echo $this->name . ' music switched on';
    }
}
