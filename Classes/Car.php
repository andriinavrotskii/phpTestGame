<?php

namespace Classes;

use Classes\Interfaces\CarInterface;


class Car implements CarInterface
{
    
    public function move()
    {
        echo 'Car moveing';
    }
}