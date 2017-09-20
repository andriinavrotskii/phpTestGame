<?php

namespace PhpTestGame\Classes;

use PhpTestGame\Classes\Interfaces\BoatInterface;
use PhpTestGame\Classes\AbstractVehicle;


class Boat extends AbstractVehicle implements BoatInterface
{
    public function swim()
    {
        echo $this->name . ' swimming';
    }
}
