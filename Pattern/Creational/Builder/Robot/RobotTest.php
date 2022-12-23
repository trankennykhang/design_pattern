<?php
namespace Kupman\Pattern\Creational\Builder\Robot;

use Kupman\Test\ITest;

class RobotTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Builder Pattern";
        newline();
        maskline();
    }
    /**
     * Describe the Robot test case
     * - Build different type of robot
     * -
     */
    public function run() {
        $this->signature();
        $factory = new RobotFactory();
        output("Build a transformer:");
        maskline();
        $factory->prepareTransformer();
        $robot = $factory->getRobot();
        $robot->describe();
        output("Build a hesman:");
        maskline();
        $factory->prepareHesman();
        $robot = $factory->getRobot();
        $robot->describe();
    }
}
?>