<?php
namespace Kupman\Pattern\Structural\Adapter\Car;

class WheelTrackAdapter implements IWheel{

    /** @var IWheel $wheel description */
    protected $wheel = null;
    
    public function __construct(IWheel $wheel) {
        $this->wheel = $wheel;
    }
    public function connect()
    {
        output("Add track below the wheel");
        $this->wheel->connect();
    }
}
?>