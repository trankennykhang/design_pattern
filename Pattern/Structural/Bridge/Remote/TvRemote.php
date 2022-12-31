<?php
namespace Kupman\Pattern\Structural\Bridge\Remote;

class TvRemote implements IRemote {

    /** @var IDevice $device  */
    protected $device = null;

    public function __construct($device) {
        $this->device = $device;
    }
    public function turnOn() {

    }
    public function turnOff() {
        
    }
    public function volumeUp()
    {
        $this->device->volumeUp();
    }
    public function volumeDown() {
        
    }
}

?>