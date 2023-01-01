<?php
namespace Kupman\Pattern\Structural\Adapter\Car;

use Kupman\Pattern\Structural\Adapter\Car\IVehicle;

class Car implements IVehicle
{
    /** @var IWheel $wheel */
    protected $wheel = null;

    public function __construct(IWheel $wheel) {
        $this->wheel = $wheel;
    }
    public function drive()
    {
        $this->wheel->connect();
    }
    public function changeWheel(IWheel $wheel)
    {
        $this->wheel = $wheel;
    }
    
}

?>