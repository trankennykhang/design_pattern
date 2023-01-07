<?php
namespace Kupman\Pattern\Structural\Flyweight\Forest;

class TreeTypeFactory{

    /** @var TreeType[] $types description */
    protected $treeTypes = [];

    public function get(string $type, string $group) {
        foreach ($this->treeTypes as $treeType) {
            if ($treeType->isMatched($type, $group)) {
                return $treeType;
            }
        }
        
        $treeType = new TreeType($type, $group);
        $this->treeTypes[] = $treeType;
        return $treeType;
    }
}
?>