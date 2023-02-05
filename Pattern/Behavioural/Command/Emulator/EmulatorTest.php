<?php
namespace Kupman\Pattern\Behavioural\Command\Emulator;

use Kupman\Test\ITest;

class EmulatorTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Command Pattern";
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
        $emulator = new Emulator();
        $emulator->ls();

    }
}
?>