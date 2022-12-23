<?php
namespace Kupman\Pattern\Creational\Builder\Robot;

/**************************************************************
 * This is kind of simple solution to describe Builder
 * RobotTest is director
 * RobotFactory can be inteface and is implemented by concrete class
 * Need to make abstract factory and factory method to see the different 
 ***************************************************************/
class RobotFactory {
    private Robot $robot;

    public function prepareTransformer(){
        $this->robot = new Robot();
        $this->robot->add('2_legs');
        $this->robot->add('Enable transform abilitity');
        $this->robot->add('shortgun on the back');
    }
    public function prepareHesman(){
        $this->robot = new Robot();
        $this->robot->add('2_legs');
        $this->robot->add('Enable solid sword');
        $this->robot->add('Enable fly mode');
    }
    public function getRobot(): Robot {
        return $this->robot;
    }
}
?>