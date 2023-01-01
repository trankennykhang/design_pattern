<?php
namespace Kupman\Pattern\Structural\Adapter\Car;

interface IVehicle
{
    public function changeWheel(IWheel $wheel);
    public function drive();
}

?>