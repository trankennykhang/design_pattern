<?php
namespace Kupman\Pattern\Creational\Builder\Robot;

class Robot {
    private array $items = [];
    
    public function add(String $item){
        output("Adding ". $item);
        $this->items[] = $item;
    }
    public function describe(){
        maskline();
        output("Get this Robot with:");
        foreach ($this->items as $item) {
            output($item);
        }
    }
}
?>