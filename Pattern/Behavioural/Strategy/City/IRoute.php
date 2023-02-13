<?php
namespace Kupman\Pattern\Behavioural\Strategy\City;

interface IRoute {
    public function getRoute(string $from, string $to);
   
}
?>