<?php
namespace Kupman\Pattern\Behavioural\State\Software;

class StaticAnalyseStep implements IStep {

    /** @var Software $software description */
    protected $software = null;

    public function __construct(Software $software) {
        $this->software = $software;
    }
    public function execute() {
        $this->software->addData("1. Static analyse data PASS");
        
        $this->software->setStep(new UnitTestStep($this->software));
        
        $this->software->goNext();
    }
}
?>