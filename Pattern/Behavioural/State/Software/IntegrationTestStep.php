<?php
namespace Kupman\Pattern\Behavioural\State\Software;

class IntegrationTestStep implements IStep {

    /** @var Software $software description */
    protected $software = null;

    public function __construct(Software $software) {
        $this->software = $software;
    }
    public function execute() {
        $this->software->addData("1. Integration test data PASS");
        
        $this->software->setStep(new DeploymentStep($this->software));
        
        $this->software->goNext();
    }
}
?>