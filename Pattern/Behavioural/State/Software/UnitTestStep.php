<?php
namespace Kupman\Pattern\Behavioural\State\Software;

class UnitTestStep implements IStep {

    /** @var Software $software description */
    protected $software = null;

    public function __construct(Software $software) {
        $this->software = $software;
    }
    public function execute() {
        $this->software->addData("2. Unit Test PASS");
        
        $this->software->setStep(new IntegrationTestStep($this->software));

        $this->software->goNext();
    }

}
?>