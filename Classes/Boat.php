<?php

namespace Classes;

use Classes\Interfaces\BoatInterface;
use Classes\VehicleBase;


class Boat extends VehicleBase implements BoatInterface
{
    public function swim()
    {
        echo $this->name . ' swimming';
    }
}
