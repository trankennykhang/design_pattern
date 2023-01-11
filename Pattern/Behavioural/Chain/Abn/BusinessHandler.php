<?php
namespace Kupman\Pattern\Behavioural\Chain\Abn;

class BusinessHandler extends BasicHandler
{
    public function handle(Abn $abn) {
        output("process business handler");
        if ($this->handler != null) {
            $this->handler->handle($abn);
        }
    }
}

?>