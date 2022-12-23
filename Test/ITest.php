<?php
namespace Kupman\Test;

interface ITest
{
    /**
     * Describe the the case
     */
    public function signature();
    /**
     * Execute the test case
     */
    public function run();
}
?>