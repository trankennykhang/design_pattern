<?php
namespace Kupman\Pattern\Structural\Flyweight\Forest;

class Tree {
    /** @var float $lat */
    protected $lat = null;

    /** @var float $long */
    protected $long = null;

    /** @var TreeType $type */
    protected $type = null;

    public function __construct(float $lat, float $long, TreeType $type) {
        $this->lat = $lat;
        $this->long = $long;
        $this->type = $type;
    }

    public function describe()
    {
        output("x: {$this->lat} and y: {$this->long}");
        output($this->type->describe());
    }
}
?>