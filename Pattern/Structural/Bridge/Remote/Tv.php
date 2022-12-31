<?php
namespace Kupman\Pattern\Structural\Bridge\Remote;

class Tv implements IDevice
{
    public function turnOff()
    {
        
    }
    public function turnOn()
    {
            
    }
    public function volumeUp()
    {
        output("TV Volume Up Press");
    }
    public function volumeDown()
    {
        
    }
}
?>