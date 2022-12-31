<?php
namespace Kupman\Pattern\Structural\Bridge\Remote;

interface IDevice
{
    public function turnOn();
    public function turnOff();
    public function volumeUp();
    public function volumeDown();
}
?>