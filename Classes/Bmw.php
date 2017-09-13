<?php

namespace Task\Classes;

use Task\Classes\Interfaces\CarInterface;
use Task\Classes\VehicleBase;


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
