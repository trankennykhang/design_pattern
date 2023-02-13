<?php
namespace Kupman\Pattern\Behavioural\Strategy\City;

class CarRoute implements IRoute {
    
    public function getRoute(string $from, string $to): string {
        return "By car from: {$from} to {$to}";
    }
}
?>