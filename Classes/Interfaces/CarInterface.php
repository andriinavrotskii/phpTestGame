<?php 

namespace PhpTestGame\Classes\Interfaces;

use PhpTestGame\Classes\Interfaces\VehicleBaseInterface;


interface CarInterface extends VehicleBaseInterface
{
    public function move();
    public function musicOn();
    public function musicOff();
    public function listenToMusic();
}