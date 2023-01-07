<?php
namespace Kupman\Pattern\Structural\Flyweight\Forest;

class Tree2 {
    /** @var float $lat */
    protected $lat = null;

    /** @var float $long */
    protected $long = null;

    /** @var string $type  */
    protected $type = null;
    
    /** @var string $group */
    protected $group = null;

    public function __construct(float $lat, float $long, string $type, string $group) {
        $this->lat = $lat;
        $this->long = $long;
        $this->type = $type;
    }

    public function describe()
    {
        output("x: {$this->lat} and y: {$this->long}");
        output("Type: {$this->type} and Group: {$this->group}");
    }
}
?>