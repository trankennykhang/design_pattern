<?php
namespace Kupman\Pattern\Behavioural\Chain\Abn;

abstract class BasicHandler
{
    /** @var IHandler $handler description */
    protected $handler = null;

    public function setNext(BasicHandler $handler) {
        $this->handler = $handler;
    }
    public abstract function handle(Abn $abn);
}

?>