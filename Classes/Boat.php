<?php

namespace PhpTestGame\Classes;

use PhpTestGame\Classes\Interfaces\BoatInterface;
use PhpTestGame\Classes\VehicleBase;


class Boat extends VehicleBase implements BoatInterface
{
    public function swim()
    {
        echo $this->name . ' swimming';
    }
}
