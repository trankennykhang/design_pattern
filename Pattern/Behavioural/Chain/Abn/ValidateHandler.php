<?php
namespace Kupman\Pattern\Behavioural\Chain\Abn;

class ValidateHandler extends BasicHandler
{
    public function handle(Abn $abn) {
        output("process validate handler");
        $abn->set("type", "validated " . $abn->get("type"));
        $this->handler->handle($abn);
    }
}

?>