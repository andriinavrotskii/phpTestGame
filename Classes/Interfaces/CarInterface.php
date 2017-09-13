<?php 
namespace Task\Classes\Interfaces;

use Task\Classes\Interfaces\VehicleBaseInterface;

interface CarInterface extends VehicleBaseInterface
{
    public function move();
    public function musicOn();
    public function musicOff();
    public function listenToMusic();
}