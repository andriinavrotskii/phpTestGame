<?php

namespace PhpTestGame\Classes;

use PhpTestGame\Classes\Interfaces\CarInterface;
use PhpTestGame\Classes\AbstractVehicle;


class Bmw extends AbstractVehicle implements CarInterface
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
