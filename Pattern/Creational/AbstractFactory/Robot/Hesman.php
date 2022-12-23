<?php
namespace Kupman\Pattern\Creational\AbstractFactory\Robot;

class Hesman implements IRobot {
    public function describe(){
        output('2 legs');
        output('enable solid sword');
        output('enable weapon on the back');
    }
}
?>