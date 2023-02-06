<?php
namespace Kupman\Pattern\Behavioural\Command\Emulator;

class Emulator {
    /** @var ICommand[] $commands description */
    protected array $commands = [];

    public function ls()
    {
        $command = $this->getCommand('ls');
        $command->execute();
    }
    public function copy()
    {
        $command = $this->getCommand('copy');
        $command->execute();
    }
    protected function getCommand(string $str) {
        if (isset($this->commands[$str])) {
            return $this->commands[$str];
        } 
        $holder = __NAMESPACE__.'\\'.ucfirst($str).'Command';
        $this->commands[$str] = new $holder();
        return $this->commands[$str];
    }
}
?>