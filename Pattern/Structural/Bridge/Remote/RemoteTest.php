<?php
namespace Kupman\Pattern\Structural\Bridge\Remote;

use Kupman\Test\ITest;

class RemoteTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Bridge Pattern";
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
        $tv = new Tv();
        $tvRemote = new TvRemote($tv);
        $tvRemote->volumeUp();
    }
}
?>