<?php

namespace Task\Classes;

use Task\Classes\Interfaces\BoatInterface;
use Task\Classes\VehicleBase;


class Boat extends VehicleBase implements BoatInterface
{
    public function swim()
    {
        echo $this->name . ' swimming';
    }
}
