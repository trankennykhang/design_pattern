<?php
namespace Kupman\Pattern\Creational\AbstractFactory\Robot;

use Kupman\Test\ITest;

class RobotTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Abstract Factory Pattern";
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
        output("Create a transformer:");
        maskline();
        $transformerFactory = new TransformerFactory();
        $transformer = $transformerFactory->createRobot();
        $transformer->describe();
        output("Create a hesman:");
        maskline();
        $hesmanFactory = new HesmanFactory();
        $hesman = $hesmanFactory->createRobot();
        $hesman->describe();
    }
}
?>