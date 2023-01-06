<?php
namespace Kupman\Pattern\Structural\Composite\Canvas;

use Kupman\Test\ITest;

class CanvasTest implements ITest
{
    public function signature() {
        newline();
        print "You are running the test for Composition Pattern";
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
        // Draw the area with 2 small areas. One with circle and one with rectangle
        $area = new Area(200, 200);
        $area1 = new Area(50, 50);
        $area2 = new Area(70, 70);
        $area1->addItem(new Circle());
        $area2->addItem(new Rectangle());
        $area->addItem($area1);
        $area->addItem($area2);
        $area->draw();

    }
}
?>