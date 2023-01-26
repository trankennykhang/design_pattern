<?php
namespace Kupman\Pattern\Structural\Proxy\Video;

use Kupman\Test\ITest;

class VideoTest implements ITest
{
    public function signature() {
        newline();
        print "You are running the test for Proxy Pattern";
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
        $youtube = new YoutubeDownload();
        $youtube->download("video 1");

        $proxy = new YoutubeProxy($youtube);
        $proxy->download("video 1");

    }
}
?>