<?php
namespace Kupman\Pattern\Structural\Adapter\Car;

class CarWheel implements IWheel
{
    public function connect()
    {
        output('connecting via shaft');
    }
}

?>