<?php
namespace Kupman\Pattern\Creational\AbstractFactory\Robot;

class Transformer implements IRobot {
    public function describe(){
        output("2 legs");
        output("enable transform to car");
        output("enable shortgun");
    }
}
?>