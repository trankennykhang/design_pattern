<?php
namespace Kupman\Pattern\Structural\Flyweight\Forest;

use Kupman\Test\ITest;

class ForestTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Flyweight Pattern";
        newline();
        maskline();
    }
    /**
     * Describe the Robot test case
     * - Build different type of robot
     * -
     */
    public function run() {
        output("Memory usage: " . memory_get_usage());
        $this->signature();
        // Create TreeType
        $factory = new TreeTypeFactory();

        $total = 500000;
        $trees = [];
        output("Memory usage: " . memory_get_usage());
        output("Creating {$total} objects");
        for ($i=0; $i < $total; $i++) { 
            //$trees[] = new Tree($i, $i, $factory->get(rand(1,3), rand(2,4)));
            $trees[] = new Tree2($i, $i, rand(1,3), rand(2,4));
        }
        output("Memory usage: " . memory_get_usage());
    }
}
?>