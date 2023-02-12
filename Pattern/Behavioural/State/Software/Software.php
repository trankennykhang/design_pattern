<?php
namespace Kupman\Pattern\Behavioural\State\Software;

class Software {
    
    /** @var IStep $step description */
    /** @var Array $data description */
    protected $data = null;
    protected $step = null;

    public function __construct() {
        $this->data = [];
    }
    public function setStep(IStep $step)
    {
        $this->step = $step;
    }
    public function commit()
    {
        $this->step = new StaticAnalyseStep($this);
        $this->step->execute();
    }
    public function goNext() {
        $this->step->execute();
    }
    public function result(){
        output(implode("\n", $this->data));
    }
    public function addData(string $data) {
        $this->data[] = $data;
    }
}
?>