<?php
namespace Kupman\Pattern\Creational\AbstractFactory\Robot;

class TransformerFactory implements IRobotFactory {

    public function createRobot(): IRobot{
        return new Transformer();
    }
}
?>