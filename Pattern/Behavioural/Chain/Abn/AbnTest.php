<?php
namespace Kupman\Pattern\Behavioural\Chain\Abn;

use Kupman\Test\ITest;

class AbnTest implements ITest {

    public function signature() {
        newline();
        print "You are running the test for Chain of Responsibility Pattern";
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
        $abn = new Abn('individual', 'test 1');
        $business = new BusinessHandler();
        $validate = new ValidateHandler();
        $validate->setNext($business);
        $validate->handle($abn);
        output($abn);
    }
}
?>