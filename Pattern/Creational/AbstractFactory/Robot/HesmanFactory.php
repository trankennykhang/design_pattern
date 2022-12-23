<?php
namespace Kupman\Pattern\Creational\AbstractFactory\Robot;

class HesmanFactory implements IRobotFactory {

    public function createRobot(): IRobot{
        return new Hesman();
    }
}
?>