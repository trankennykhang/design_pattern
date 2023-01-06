<?php
namespace Kupman\Pattern\Structural\Adapter\Car;

use Kupman\Test\ITest;

class CarTest implements ITest
{
    public function signature()
    {
        newline();
        print "You are running the test for Adapter Pattern";
        newline();
        maskline();
    }
    public function run()
    {
        $this->signature();
        $wheel = new CarWheel();
        $car = new Car($wheel);
        $car->drive();
        $wheel2 = new WheelTrackAdapter($wheel);
        $car->changeWheel($wheel2);
        $car->drive();
    }
}


?>