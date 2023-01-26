<?php
namespace Kupman\Pattern\Structural\Facade\Video;

use Kupman\Test\ITest;

class VideoTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Facade Pattern";
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
        $converter = new VideoConverter();
        $status = $converter->convert("furious 1", "mp4");
    }
}
?>