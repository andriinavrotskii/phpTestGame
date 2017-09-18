<?php
namespace PhpTestGame\Tests;

use PhpTestGame\Classes\Vehicle;
use PhpTestGame\Classes\Bmw;

class VehicleTest extends \PHPUnit_Framework_TestCase
{
    public function testVehicleContainsCorrectInstanceOfBmw()
    {
        $vehicle = new Vehicle('bmw');
        $propertyVehicle = $this->getPrivateProperty('PhpTestGame\Classes\Vehicle', 'vehicle');
        $this->assertInstanceOf(Bmw::class, $propertyVehicle->getValue($vehicle));
    }


    public function testVehicleBmwName()
    {
        $vehicle = new Vehicle('bmw');
        $this->assertEquals($vehicle->getName(), 'bmw');

        $propertyVehicle = $this->getPrivateProperty('PhpTestGame\Classes\Vehicle', 'vehicle');
        $propertyName = $this->getPrivateProperty('PhpTestGame\Classes\Bmw', 'name');

        $this->assertEquals($propertyName->getValue($propertyVehicle->getValue($vehicle)), 'bmw');
    }


    public function testVehicleBmwMoveing()
    {
        $vehicle = new Vehicle('bmw');
        $vehicle->move();
        $this->expectOutputString('bmw moveing');
        $vehicle->stop();
        $this->expectOutputString('bmw moveingbmw stopped');
    }


    public function testVehicleBmwMusic()
    {
        $vehicle = new Vehicle('bmw');

        $propertyVehicle = $this->getPrivateProperty('PhpTestGame\Classes\Vehicle', 'vehicle');
        $propertyMusicIsOn = $this->getPrivateProperty('PhpTestGame\Classes\Bmw', 'musicIsOn');

        $this->assertEquals($propertyMusicIsOn->getValue($propertyVehicle->getValue($vehicle)), false);

        $vehicle->listenToMusic();
        $espectedOutput = 'bmw beautiful silence';
        $this->expectOutputString($espectedOutput);

        $vehicle->musicOn();
        $espectedOutput .= 'bmw music switched on';
        $this->expectOutputString($espectedOutput);

        $this->assertEquals($propertyMusicIsOn->getValue($propertyVehicle->getValue($vehicle)), true);

        $vehicle->listenToMusic();
        $espectedOutput .= 'bmw music lalala';
        $this->expectOutputString($espectedOutput);

        $vehicle->musicOff();
        $espectedOutput .= 'bmw music switched off';
        $this->expectOutputString($espectedOutput);

        $this->assertEquals($propertyMusicIsOn->getValue($propertyVehicle->getValue($vehicle)), false);

        $vehicle->listenToMusic();
        $espectedOutput .= 'bmw beautiful silence';
        $this->expectOutputString($espectedOutput);

    }


    public function testVehicleBmwRefuel()
    {
        $vehicle = new Vehicle('bmw');
        $vehicle->refuel('benzin');
        $this->expectOutputString('bmw refuel benzin');
    }


    private function getPrivateProperty($className, $propertyName) {
        $reflector = new \ReflectionClass($className);
        $property = $reflector->getProperty($propertyName);
        $property->setAccessible(true);
 
        return $property;
    }



}