<?php
namespace Kupman\Pattern\Behavioural\Chain\Abn;

interface IHandler
{
    public function setNext(IHandler $handler);
    public function handle(Abn $abn);
}

?>