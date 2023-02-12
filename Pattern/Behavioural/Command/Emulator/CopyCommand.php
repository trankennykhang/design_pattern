<?php
namespace Kupman\Pattern\Behavioural\Command\Emulator;

class CopyCommand implements ICommand
{
    public function execute(){
        output('do something here for copy command');
    }
}

?>