<?php
namespace Kupman\Pattern\Creational\Builder\Robot;

class RobotFactory {
    private Robot $robot;

    public function prepareTransformer(){
        $this->robot = new Robot();
        $this->robot->add('Adding 2 normal legs');
        $this->robot->add('Add abilitity to transform to car');
    }
    public function getRobot(): Robot {
        return $this->robot;
    }
}
?>