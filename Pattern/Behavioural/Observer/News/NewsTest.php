<?php
namespace Kupman\Pattern\Behavioural\Observer\News;

use Kupman\Test\ITest;

class NewsTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Observer Pattern";
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
    
    }
}
?>