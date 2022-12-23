<?php
namespace Kupman\Pattern\Creational\Builder\Robot;

class Robot {
    private array $items = [];
    
    public function add(String $item){
        $this->items[] = $item;
    }
    public function describe(){
        foreach ($this->items as $item) {
            output($item);
        }
    }
}
?>