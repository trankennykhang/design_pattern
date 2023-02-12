<?php
namespace Kupman\Pattern\Behavioural\State\Software;

class DeploymentStep implements IStep {

    /** @var Software $software description */
    protected $software = null;

    public function __construct(Software $software) {
        $this->software = $software;
    }
    public function execute() {
        $this->software->addData("1. Deployment data PASS");
        
    }
}
?>