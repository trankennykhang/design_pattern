<?php
namespace Kupman\Pattern\Behavioural\Strategy\City;

class City {
    /** @var IRoute $route description */
    protected $route = null;
    
    public function setRoute(IRoute $route)
    {
        $this->route = $route;
    }
    public function direct2CityHall(string $from): string
    {
        return $this->route->getRoute($from, 'cityhall');
    }
}
?>