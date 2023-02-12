<?php
namespace Kupman\Pattern\Behavioural\State\Software;

use Kupman\Test\ITest;

class SoftwareTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for State Pattern";
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
        $software = new Software();
        $software->commit();
        $software->result();
    }
}
?>