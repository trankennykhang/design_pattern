<?php
namespace Kupman\Pattern\Behavioural\Strategy\City;

use Kupman\Test\ITest;

class CityTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Strategy Pattern";
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
        $city = new City();
        $city->setRoute(new CarRoute());
        output($city->direct2CityHall("my house"));
    }
}
?>