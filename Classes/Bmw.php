<?php

namespace Task\Classes;

use Task\Classes\Interfaces\CarInterface;
use Task\Classes\VehicleBase;


class Bmw extends VehicleBase implements CarInterface
{
    private $musicIsOn = false;


    public function move()
    {
        echo $this->name . ' moveing';
    }


    public function musicOn()
    {
        $this->musicIsOn = true;
        echo $this->name . ' music switched on';
    }


    public function musicOff()
    {
        $this->musicIsOn = false;
        echo $this->name . ' music switched off';
    }


    public function listenToMusic()
    {
        if ($this->musicIsOn) {
            echo $this->name . ' music lalala';
        } else {
            echo $this->name . ' beautiful silence';
        }
    }
}
