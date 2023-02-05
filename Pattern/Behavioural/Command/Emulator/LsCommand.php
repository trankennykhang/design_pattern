<?php
namespace Kupman\Pattern\Behavioural\Command\Emulator;

class LsCommand implements ICommand
{
    public function execute(){
        output('do something here for ls command');
    }
}

?>