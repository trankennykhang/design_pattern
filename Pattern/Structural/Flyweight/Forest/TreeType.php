<?php
namespace Kupman\Pattern\Structural\Flyweight\Forest;

class TreeType {
    /** @var string $type  */
    protected $type = null;
    
    /** @var string $group */
    protected $group = null;

    public function __construct(string $type, string $group) {
        $this->type = $type;
        $this->group = $group;
    }
    public function describe()
    {
        output("Type: {$this->type} and Group: {$this->group}");
    }
    public function isMatched(string $type, string $group) {
        return $this->type == $type && $this->group == $group;
    }
}
?>