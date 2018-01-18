<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand;

class WorkflowDumpCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand
*/
protected $workflowDumpCommand;

public function setUp()
{
    parent::setUp();

    $this->workflowDumpCommand = new \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand();
}
}
